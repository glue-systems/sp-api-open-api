<?php

namespace Glue\SPAPI\OpenAPI\Services\Authenticator;

use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;
use GuzzleHttp\ClientInterface;

interface ClientAuthenticatorContract
{
    /**
     * @return SPAPIConfig
     */
    public function getSpApiConfig();

    /**
     * @return string
     */
    public function rememberLwaAccessToken();

    /**
     * @return array
     */
    public function generateNewLwaAccessToken();

    /**
     * @param string|null $restrictedDataToken
     * @return ClientInterface
     */
    public function createAuthenticatedGuzzleClient($restrictedDataToken = null);
}
