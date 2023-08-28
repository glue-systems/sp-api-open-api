<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Middleware\AwsSignatureV4Middleware;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;

class ClientAuthenticator implements ClientAuthenticatorInterface
{
    /**
     * @var LwaServiceInterface
     */
    protected $lwaService;

    /**
     * @var callable
     */
    protected $awsCredentialProvider;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    public function __construct(
        LwaServiceInterface $lwaService,
        callable $awsCredentialProvider,
        SpApiConfig $spApiConfig
    ) {
        $this->lwaService            = $lwaService;
        $this->awsCredentialProvider = $awsCredentialProvider;
        $this->spApiConfig           = $spApiConfig;
    }

    /**
     * Create an authenticated Guzzle client, ready to be passed into
     * the constructor of an SP-API client class.
     *
     * @param callable|null $rdtProvider Callable restricted data token provider that returns an RDT, if needed for the SP-API operation.
     * @return ClientInterface
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createAuthenticatedGuzzleClient(
        callable $rdtProvider = null
    ) {
        // Note that several key Guzzle request fields / options such as 'base_uri',
        // 'debug' etc. are overwritten downstream when the domain Api class (e.g.
        // Clients/OrdersV0/Api/OrdersV0Api) is invoked in the internals of the
        // OpenAPI-generated client. The source of truth for such fields are the
        // Configuration objects that are associated with the domain API being used
        // (e.g. Clients/OrdersV0/Configuration). See ClientBuilder method
        // `_configureDomainConfigDefaults` for how these values are set.
        return new Client([
            'headers'  => [
                'x-amz-access-token' => $this->_resolveAccessToken($rdtProvider),
            ],
            'handler'  => $this->_buildHandlerStack(),
        ]);
    }

    /**
     * @return string
     */
    protected function _resolveAccessToken(callable $rdtProvider = null)
    {
        if ($rdtProvider) {
            $accessToken = call_user_func($rdtProvider);
        } else {
            $accessToken = $this->lwaService->rememberLwaAccessToken();
        }
        return $accessToken;
    }

    /**
     * @return HandlerStack
     */
    protected function _buildHandlerStack()
    {
        // TODO: Parameterize handlerStack, awsCredentialScopeServiceOverride
        // and awsCredentialScopeRegionOverride to give developers more flexibility?
        $handlerStack = new HandlerStack();
        $handlerStack->setHandler(new CurlHandler());

        $handlerStack->push(new AwsSignatureV4Middleware(
            $this->awsCredentialProvider,
            $this->spApiConfig->defaultAwsCredentialScopeService,
            $this->spApiConfig->defaultAwsCredentialScopeRegion
        ));

        return $handlerStack;
    }
}
