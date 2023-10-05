<?php

namespace Glue\SpApi\OpenAPI;

use Exception;
use Glue\SpApi\OpenAPI\Builder\BuilderMiddlewarePipeline;
use Glue\SpApi\OpenAPI\Builder\ClientBuilder;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\DomainApiException;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Exceptions\SpApiResolutionException;
use Glue\SpApi\OpenAPI\Middleware\Builder\RequestRdtMiddleware;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryInterface;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\Services\Rdt\RdtServiceInterface;
use Glue\SpApi\OpenAPI\SpApiRoster;
use ReflectionFunction;

/**
 * Base SP-API execution class, the sub-classes of which should be instantiated
 * once per SP-API call, without persistence as singletons.
 */
class SpApiExecution
{
    /**
     * @var ClientFactoryInterface
     */
    protected $clientFactory;

    /**
     * @var RdtServiceInterface
     */
    protected $rdtService;

    /**
     * @var LwaServiceInterface
     */
    protected $lwaService;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    /**
     * @var string|null
     */
    protected $clientClassFqn = null;

    /**
     * @var BuilderMiddlewarePipeline
     */
    protected $builderMiddlewarePipeline;

    public function __construct(
        ClientFactoryInterface $clientFactory,
        RdtServiceInterface $rdtService,
        LwaServiceInterface $lwaService,
        SpApiConfig $spApiConfig,
        BuilderMiddlewarePipeline $builderMiddlewarePipeline = null
    ) {
        $this->clientFactory             = $clientFactory;
        $this->rdtService                = $rdtService;
        $this->lwaService                = $lwaService;
        $this->spApiConfig               = $spApiConfig;
        $this->builderMiddlewarePipeline = $builderMiddlewarePipeline
            ?: new BuilderMiddlewarePipeline();
    }

    /**
     * @param callable $execute
     * @return mixed
     * @throws DomainApiException|LwaAccessTokenException|RestrictedDataTokenException
     */
    public function execute(callable $execute)
    {
        if (isset($this->clientClassFqn)) {
            $clientFactoryMethod = SpApiRoster::getFactoryMethodFromClientClassFqn($this->clientClassFqn);
        } else {
            $clientFactoryMethod = $this->_resolveClientFactoryMethodViaReflection($execute);
        }

        try {
            return $this->_invokeExecuteCallback($clientFactoryMethod, $execute);
        } catch (DomainApiException $ex) {
            return $this->_tryAgainIfAuthFailedOrThrow($ex, $clientFactoryMethod, $execute);
        } catch (LwaAccessTokenException $ex) {
            return $this->_tryAgainIfAuthFailedOrThrow($ex, $clientFactoryMethod, $execute);
        } catch (RestrictedDataTokenException $ex) {
            return $this->_tryAgainIfAuthFailedOrThrow($ex, $clientFactoryMethod, $execute);
        }
    }

    /**
     * Set a Restricted Data Token (RDT) request to be used for this SP-API execution.
     *
     * @return static
     */
    public function withRdtRequest(CreateRestrictedDataTokenRequest $rdtRequest)
    {
        $this->pushBuilderMiddleware(
            new RequestRdtMiddleware($this->rdtService, $rdtRequest),
            RequestRdtMiddleware::MIDDLEWARE_NAME
        );
        return $this;
    }

    /**
     * Push a middleware that will be applied to the ClientBuilder instance that
     * is used to construct the SP-API client.
     *
     * @param callable $middleware
     * @param string|null $name
     * @return static
     */
    public function pushBuilderMiddleware(
        callable $middleware,
        $name = null
    ) {
        $this->builderMiddlewarePipeline->push($middleware, $name);
        return $this;
    }

    /**
     * Add a callback to modify the ClientBuilder instance that is used to construct
     * the SP-API client. This is simply a quicker way to push a new builder
     * middleware onto the pipeline without needing to manage the `next` callback.
     *
     * @param callable $builderCallback Callback 1st parameter is instance of `ClientBuilder`
     * @param string|null $name
     * @return static
     */
    public function buildUsing(
        callable $builderCallback,
        $name = null
    ) {
        $middleware = $this->_wrapBuilderCallbackInMiddleware($builderCallback);

        $this->pushBuilderMiddleware($middleware, $name);
        return $this;
    }

    /**
     * Get the global SP-API config object.
     *
     * @return SpApiConfig
     */
    public function getSpApiConfig()
    {
        return clone $this->spApiConfig;
    }

    protected function _resolveClientFactoryMethodViaReflection(callable $execute)
    {
        $reflector = new ReflectionFunction($execute);

        if (empty($parameters = $reflector->getParameters())) {
            throw new SpApiResolutionException("The callback passed to SpApi::execute"
                . " has no parameters; the first argument must be one of: ["
                . implode(', ', SpApiRoster::allClientClassFqns()) . "]");
        }

        // TODO: Update the use of `getClass()` to `getType()`, as the former is deprecated
        // and highly discouraged as of PHP 8, whereas the latter is only available from PHP 7.
        $typeHintedParameterClass = $parameters[0]->getClass();
        if (empty($typeHintedParameterClass->name)) {
            throw new SpApiResolutionException("Unable to resolve API client class"
                . " in the callback of SpApi::execute; please type-hint a valid API class name,"
                . " or call a setter method explicitly (e.g. ordersV0(), reportsV20210630() etc).");
        }

        if (!SpApiRoster::isValidClientClassFqn($typeHintedParameterClass->name)) {
            throw new SpApiResolutionException("Invalid type-hinted class name"
                . " [{$typeHintedParameterClass->name}] in the callback of SpApi::execute;"
                . " must be one of: [" . implode(', ', SpApiRoster::allClientClassFqns()) . "]");
        }

        return SpApiRoster::getFactoryMethodFromClientClassFqn($typeHintedParameterClass->name);
    }

    /**
     * @param string $clientFactoryMethod
     * @param callable $execute
     * @return mixed
     * @throws DomainApiException
     */
    protected function _invokeExecuteCallback(
        $clientFactoryMethod,
        callable $execute
    ) {
        try {
            $apiClient = $this->clientFactory->{$clientFactoryMethod}(
                $this->builderMiddlewarePipeline
            );
            return $execute($apiClient);
        } catch (Exception $ex) {
            if (SpApiRoster::isApiException($ex)) {
                throw new DomainApiException(
                    $ex,
                    $this->spApiConfig->alwaysUnpackApiExceptionResponseBody
                );
            }
            throw $ex;
        }
    }

    protected function _wrapBuilderCallbackInMiddleware(
        callable $builderCallback
    ) {
        return function (callable $next) use ($builderCallback) {
            return function (ClientBuilder $builder) use ($builderCallback, $next) {
                $builderCallback($builder);
                return $next($builder);
            };
        };
    }

    /**
     * @param DomainApiException|LwaAccessTokenException|RestrictedDataTokenException $ex
     * @param string $clientFactoryMethod
     * @param callable $execute
     * @return mixed
     * @throws DomainApiException|LwaAccessTokenException|RestrictedDataTokenException
     */
    protected function _tryAgainIfAuthFailedOrThrow(
        $ex,
        $clientFactoryMethod,
        callable $execute
    ) {
        if (in_array($ex->getCode(), [401, 403])) {
            $this->lwaService->forgetCachedLwaAccessToken();
            return $this->_invokeExecuteCallback($clientFactoryMethod, $execute);
        }
        throw $ex;
    }
}
