<?php

namespace Glue\SpApi\OpenAPI\Services\Lwa;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenRequestException;
use GuzzleHttp\ClientInterface;

interface LwaServiceInterface
{
    /**
     * Request a new LWA access token.
     *
     * @return array
     * @throws LwaAccessTokenRequestException
     */
    public function requestNewLwaAccessToken(ClientInterface $guzzleClient);
}
