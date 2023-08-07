<?php

namespace Glue\SPAPI\OpenAPI\Services\Authenticator;

use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;
use GuzzleHttp\ClientInterface;

interface ClientAuthenticatorContract
{
    /**
     * Get the global SP-API config object.
     *
     * @return SPAPIConfig
     */
    public function getSPAPIConfig();

    /**
     * Get the cached LWA access token if it exists, or fetch a new one
     * and save it in the cache.
     *
     * @return string
     */
    public function rememberLwaAccessToken();

    /**
     * Generate a new LWA access token.
     *
     * @return array
     */
    public function requestNewLwaAccessToken();

    /**
     * Create an authenticated Guzzle client, ready to be passed into
     * the constructor of an SP-API client class.
     *
     * @param string|null $restrictedDataToken
     * @return ClientInterface
     */
    public function createAuthenticatedGuzzleClient($restrictedDataToken = null);
}
