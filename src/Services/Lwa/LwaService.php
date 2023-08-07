<?php

namespace Glue\SpApi\OpenAPI\Services\Lwa;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenRequestException;
use Glue\SpApi\OpenAPI\Services\SpApiConfig;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

class LwaService implements LwaServiceContract
{
    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    public function __construct(
        SpApiConfig $spApiConfig
    ) {
        $this->spApiConfig = $spApiConfig;
    }

    /**
     * Request a new LWA access token.
     *
     * @return array
     * @throws LwaAccessTokenRequestException
     */
    public function requestNewLwaAccessToken(ClientInterface $guzzleClient)
    {
        try {
            $response = $guzzleClient->request('POST', '/auth/o2/token', [
                RequestOptions::JSON => [
                    'grant_type'    => 'refresh_token',
                    'refresh_token' => $this->spApiConfig->lwaRefreshToken,
                    'client_id'     => $this->spApiConfig->lwaClientId,
                    'client_secret' => $this->spApiConfig->lwaClientSecret,
                ],
            ]);
        } catch (GuzzleException $ex) {
            $msg = "Failed to retrieve Login With Amazon (LWA) Access Token: '{$ex->getMessage()}'";
            throw new LwaAccessTokenRequestException($msg, 0, $ex);
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}