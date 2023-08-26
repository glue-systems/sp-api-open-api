<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
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
    protected $credentialProvider;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    public function __construct(
        LwaServiceInterface $lwaService,
        callable $credentialProvider,
        SpApiConfig $spApiConfig
    ) {
        $this->lwaService         = $lwaService;
        $this->credentialProvider = $credentialProvider;
        $this->spApiConfig        = $spApiConfig;

        $this->spApiConfig->validateConfig();
    }

    /**
     * Create an authenticated Guzzle client, ready to be passed into
     * the constructor of an SP-API client class.
     *
     * @param string|null $restrictedDataToken
     * @return ClientInterface
     * @throws LwaAccessTokenException
     */
    public function createAuthenticatedGuzzleClient(
        $restrictedDataToken = null
    ) {
        if ($restrictedDataToken) {
            $accessToken = $restrictedDataToken;
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
            $this->credentialProvider,
            // TODO: Configify defaults & parameterize overrides for these values.
            'execute-api',
            'us-east-1'
        ));

        return $stack;
    }
}
