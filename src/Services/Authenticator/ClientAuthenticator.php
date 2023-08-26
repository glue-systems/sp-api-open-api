<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Aws\Signature\SignatureV4;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Middleware\AwsSignatureV4Middleware;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\SpApiConfig;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;
use Psr\SimpleCache\CacheInterface;

class ClientAuthenticator implements ClientAuthenticatorInterface
{
    const LWA_ACCESS_TOKEN_CACHE_KEY = 'lwa_access_token';

    const CACHE_LIFE_BUFFER_IN_SECONDS = 60;

    /**
     * @var CacheInterface
     */
    protected $cache;

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
        CacheInterface $cache,
        LwaServiceInterface $lwaService,
        callable $credentialProvider,
        SpApiConfig $spApiConfig
    ) {
        $this->cache              = $cache;
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
    public function createAuthenticatedGuzzleClient($restrictedDataToken = null)
    {
        if ($restrictedDataToken) {
            $accessToken = $restrictedDataToken;
        } else {
            $accessToken = $this->rememberLwaAccessToken();
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

    /**
     * Get the cached Login with Amazon (LWA) access token if it exists, or request a new one
     * and save it in the cache.
     *
     * @return string
     * @throws LwaAccessTokenException
     */
    public function rememberLwaAccessToken()
    {
        if ($cachedToken = $this->cache->get(self::LWA_ACCESS_TOKEN_CACHE_KEY)) {
            return $cachedToken;
        }

        $newToken = $this->lwaService->requestNewLwaAccessToken(new Client([
            'base_uri' => $this->spApiConfig->lwaOAuthBaseUrl,
            'debug'    => $this->spApiConfig->debugOAuthApiCall,
        ]));

        $this->cache->set(
            self::LWA_ACCESS_TOKEN_CACHE_KEY,
            $newToken['access_token'],
            $newToken['expires_in'] - self::CACHE_LIFE_BUFFER_IN_SECONDS
        );

        return $newToken['access_token'];
    }

    protected function _buildHandlerStack()
    {
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());

        $stack->push(new AwsSignatureV4Middleware(
            $this->credentialProvider,
            // TODO: Config-ify these values?
            'execute-api',
            'us-east-1'
        ));

        return $stack;
    }
}
