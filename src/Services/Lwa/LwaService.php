<?php

namespace Glue\SpApi\OpenAPI\Services\Lwa;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\SpApiConfig;
use GuzzleHttp\Client;
use Psr\SimpleCache\CacheInterface;

class LwaService implements LwaServiceInterface
{
    const LWA_ACCESS_TOKEN_CACHE_KEY = 'lwa_access_token';

    const CACHE_LIFE_BUFFER_IN_SECONDS = 60;

    /**
     * @var LwaClientInterface
     */
    protected $lwaClient;

    /**
     * @var CacheInterface
     */
    protected $cache;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    public function __construct(
        LwaClientInterface $lwaClient,
        CacheInterface $cache,
        SpApiConfig $spApiConfig
    ) {
        $this->lwaClient   = $lwaClient;
        $this->cache       = $cache;
        $this->spApiConfig = $spApiConfig;
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

        $newToken = $this->lwaClient->requestNewLwaAccessToken(new Client());

        $this->cache->set(
            self::LWA_ACCESS_TOKEN_CACHE_KEY,
            $newToken['access_token'],
            $newToken['expires_in'] - self::CACHE_LIFE_BUFFER_IN_SECONDS
        );

        return $newToken['access_token'];
    }

    /**
     * Forget the cached Login with Amazon (LWA) access token.
     *
     * @return bool
     */
    public function forgetLwaAccessToken()
    {
        return $this->cache->delete(self::LWA_ACCESS_TOKEN_CACHE_KEY);
    }
}
