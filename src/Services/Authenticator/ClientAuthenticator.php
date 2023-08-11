<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Aws\Signature\SignatureV4;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
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

        return $this->_makeGuzzleClient($accessToken);
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

    /**
     * @param string $accessToken
     * @return ClientInterface
     */
    protected function _makeGuzzleClient($accessToken)
    {
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());

        $stack->push(Middleware::mapRequest(
            function (RequestInterface $request) {
                // Example from official docs: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/service_cloudsearch-custom-requests.html
                $credentials = call_user_func($this->credentialProvider)->wait();

                // TODO: Config-ify these values?
                $signer  = new SignatureV4('execute-api', 'us-east-1');
                $request = $signer->signRequest($request, $credentials);
                return $request;
            }
        ));

        return new Client([
            'base_uri' => $this->spApiConfig->spApiBaseUrl,
            'debug'    => $this->spApiConfig->debugDomainApiCall,
            'headers'  => [
                'x-amz-access-token' => $accessToken,
                // TODO: Verify x-amz-date header is safe to remove as it's overwritten in AWS's SignatureV4?
                // 'x-amz-date'         => $formattedTimestamp,
                // (User-Agent and Host are set downstream in the internals of the OpenAPI
                // clients, using data captured in each client's config object.)
            ],
            'handler'  => $stack,
        ]);
    }
}
