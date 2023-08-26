<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Middleware\AwsSignatureV4Middleware;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\SpApiConfig;
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

        $this->spApiConfig->validateConfig();
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
        if ($rdtProvider) {
            $accessToken = call_user_func($rdtProvider);
        } else {
            $accessToken = $this->lwaService->rememberLwaAccessToken();
        }

        $stack = $this->_buildHandlerStack();

        return new Client([
            'base_uri' => $this->spApiConfig->spApiBaseUrl,
            'debug'    => $this->spApiConfig->debugDomainApiCall,
            'headers'  => [
                'x-amz-access-token' => $accessToken,
            ],
            'handler'  => $stack,
        ]);
    }

    protected function _buildHandlerStack()
    {
        // TODO: Parameterize a HandlerStack to give developers more flexibility.
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());

        $stack->push(new AwsSignatureV4Middleware(
            $this->awsCredentialProvider,
            // TODO: Configify defaults & parameterize overrides for these values.
            'execute-api',
            'us-east-1'
        ));

        return $stack;
    }
}
