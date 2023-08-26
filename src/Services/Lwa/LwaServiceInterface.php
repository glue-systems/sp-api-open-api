<?php

namespace Glue\SpApi\OpenAPI\Services\Lwa;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;

interface LwaServiceInterface
{
    /**
     * Get the cached Login with Amazon (LWA) access token if it exists, or request a new one
     * and save it in the cache.
     *
     * @return string
     * @throws LwaAccessTokenException
     */
    public function rememberLwaAccessToken();

    /**
     * Forget the cached Login with Amazon (LWA) access token.
     *
     * @return bool
     */
    public function forgetLwaAccessToken();
}
