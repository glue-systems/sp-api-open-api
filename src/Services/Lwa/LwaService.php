<?php

namespace Glue\SpApi\OpenAPI\Services\Lwa;

use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use GuzzleHttp\Client;
use Psr\SimpleCache\CacheInterface;

class LwaService implements LwaServiceInterface
{
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
        if ($cachedToken = $this->cache->get($this->spApiConfig->lwaAccessTokenCacheKey)) {
            return $cachedToken;
        }

        $newToken = $this->lwaClient->requestNewLwaAccessToken(new Client());

        $this->cache->set(
            $this->spApiConfig->lwaAccessTokenCacheKey,
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
    public function forgetCachedLwaAccessToken()
    {
        return $this->cache->delete($this->spApiConfig->lwaAccessTokenCacheKey);
    }
}
