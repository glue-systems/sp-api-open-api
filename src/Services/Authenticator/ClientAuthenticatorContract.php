<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Glue\SpApi\OpenAPI\Services\SpApiConfig;
use GuzzleHttp\ClientInterface;

interface ClientAuthenticatorContract
{
    /**
     * Get the global SP-API config object.
     *
     * @return SpApiConfig
     */
    public function getSpApiConfig();

    /**
     * Create an authenticated Guzzle client, ready to be passed into
     * the constructor of an SP-API client class.
     *
     * @param string|null $restrictedDataToken
     * @return ClientInterface
     */
    public function createAuthenticatedGuzzleClient($restrictedDataToken = null);

    /**
     * Get the cached LWA access token if it exists, or fetch a new one
     * and save it in the cache.
     *
     * @return string
     */
    public function rememberLwaAccessToken();
}
