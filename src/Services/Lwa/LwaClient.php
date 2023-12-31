<?php

namespace Glue\SpApi\OpenAPI\Services\Lwa;

use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;

class LwaClient implements LwaClientInterface
{
    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    public function __construct(SpApiConfig $spApiConfig)
    {
        $this->spApiConfig = $spApiConfig;
    }

    /**
     * Request a new Login with Amazon (LWA) access token.
     *
     * @return array
     * @throws LwaAccessTokenException
     */
    public function requestNewLwaAccessToken(ClientInterface $guzzleClient)
    {
        try {
            $response = $guzzleClient->request('POST', '/auth/o2/token', [
                'base_uri'            => $this->spApiConfig->lwaOAuthBaseUrl,
                RequestOptions::DEBUG => $this->spApiConfig->oAuthApiCallDebug,
                RequestOptions::JSON  => [
                    'grant_type'    => 'refresh_token',
                    'refresh_token' => $this->spApiConfig->lwaRefreshToken,
                    'client_id'     => $this->spApiConfig->lwaClientId,
                    'client_secret' => $this->spApiConfig->lwaClientSecret,
                ],
            ]);
        } catch (RequestException $ex) {
            $msg = "Request exception when attempting to retrieve Login with Amazon (LWA)"
                . " Access Token: '{$ex->getMessage()}'";
            $errorCode = $ex->hasResponse()
                ? $ex->getResponse()->getStatusCode()
                : $ex->getCode();
            throw new LwaAccessTokenException($msg, $errorCode, $ex);
        } catch (GuzzleException $ex) {
            $errorCode = $ex->getCode();
            $msg = "Guzzle exception when attempting to retrieve Login with Amazon (LWA)"
                . " Access Token: '{$ex->getMessage()}'";
            throw new LwaAccessTokenException($msg, $ex->getCode(), $ex);
        }

        return json_decode($response->getBody()->getContents(), true);
    }
}
