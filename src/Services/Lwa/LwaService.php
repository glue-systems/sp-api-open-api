<?php

namespace Glue\SpApi\OpenAPI\Services\Lwa;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenRequestException;
use Glue\SpApi\OpenAPI\SpApiConfig;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

class LwaService implements LwaServiceInterface
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
     * Request a new Login with Amazon (LWA) access token.
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
            $msg = "Failed to retrieve Login with Amazon (LWA) Access Token: '{$ex->getMessage()}'";
            throw new LwaAccessTokenRequestException($msg, 0, $ex);
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}
