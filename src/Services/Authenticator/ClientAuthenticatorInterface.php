<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use GuzzleHttp\ClientInterface;

interface ClientAuthenticatorInterface
{
    /**
     * Create an authenticated Guzzle client, ready to be passed into
     * the constructor of an SP-API client class.
     *
     * @param string|null $restrictedDataToken
     * @return ClientInterface
     * @throws LwaAccessTokenException
     */
    public function createAuthenticatedGuzzleClient($restrictedDataToken = null);

    /**
     * Get the cached Login with Amazon (LWA) access token if it exists, or request a new one
     * and save it in the cache.
     *
     * @return string
     * @throws LwaAccessTokenException
     */
    public function rememberLwaAccessToken();
}
