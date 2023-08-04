<?php

namespace Glue\SPAPI\OpenAPI\Services\Authenticator;

use Aws\Signature\SignatureV4;
use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Handler\CurlHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\RequestInterface;
use Psr\SimpleCache\CacheInterface;

class ClientAuthenticator implements ClientAuthenticatorContract
{
    const LWA_ACCESS_TOKEN_CACHE_KEY = 'lwa_access_token';

    const CACHE_LIFE_BUFFER_IN_SECONDS = 60;

    /**
     * @var CacheInterface
     */
    protected $cache;

    /**
     * @var callable
     */
    protected $credentialProvider;

    /**
     * @var SPAPIConfig
     */
    protected $spApiConfig;

    public function __construct(
        CacheInterface $cache,
        callable $credentialProvider,
        SPAPIConfig $spApiConfig
    ) {
        $this->cache               = $cache;
        $this->credentialProvider  = $credentialProvider;
        $this->spApiConfig         = $spApiConfig;

        $this->spApiConfig->validateConfig();
    }

    /**
     * @return SPAPIConfig
     */
    public function getSpApiConfig()
    {
        return clone $this->spApiConfig;
    }

    /**
     * @return string
     */
    public function rememberLwaAccessToken()
    {
        if ($cachedToken = $this->cache->get(self::LWA_ACCESS_TOKEN_CACHE_KEY)) {
            return $cachedToken;
        }

        $newToken = $this->generateNewLwaAccessToken();

        $this->cache->set(
            self::LWA_ACCESS_TOKEN_CACHE_KEY,
            $newToken['access_token'],
            $newToken['expires_in'] - self::CACHE_LIFE_BUFFER_IN_SECONDS
        );

        return $newToken['access_token'];
    }

    /**
     * @return array
     */
    public function generateNewLwaAccessToken()
    {
        $guzzle = new Client([
            'base_uri' => $this->spApiConfig->lwaOAuthBaseUrl,
            'debug'    => $this->spApiConfig->debugOAuthApiCall,
        ]);

        $response = $guzzle->request('POST', '/auth/o2/token', [
            RequestOptions::JSON => [
                'grant_type'    => 'refresh_token',
                'refresh_token' => $this->spApiConfig->lwaRefreshToken,
                'client_id'     => $this->spApiConfig->lwaClientId,
                'client_secret' => $this->spApiConfig->lwaClientSecret,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @param string|null $restrictedDataToken
     * @return ClientInterface
     */
    public function createAuthenticatedGuzzleClient($restrictedDataToken = null)
    {
        if ($restrictedDataToken) {
            $accessToken = $restrictedDataToken;
        } else {
            $lwaAccessToken = $this->rememberLwaAccessToken();
            $accessToken    = $lwaAccessToken;
        }

        $now = new \DateTime('now', new \DateTimeZone('UTC'));

        $formattedTimestamp = $now->format('Ymd\THis\Z');

        return $this->_makeGuzzleClient($accessToken, $formattedTimestamp);
    }

    /**
     * @param string $accessToken
     * @param string $formattedTimestamp
     * @return ClientInterface
     */
    protected function _makeGuzzleClient($accessToken, $formattedTimestamp)
    {
        $stack = new HandlerStack();
        $stack->setHandler(new CurlHandler());

        $stack->push(Middleware::mapRequest(
            function (RequestInterface $request) use ($formattedTimestamp) {
                // Example from official docs: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/service_cloudsearch-custom-requests.html
                $credentials = call_user_func($this->credentialProvider)->wait();

                // TODO: Config-ify these values?
                $signer  = new SignatureV4('execute-api', 'us-east-1');
                $request = $signer->signRequest($request, $credentials);
                return $request;
            }
        ));

        return new Client([
            'base_uri' => $this->spApiConfig->spApiBaseUrl,
            'debug'    => $this->spApiConfig->debugDomainApiCall,
            'headers'  => [
                'x-amz-access-token' => $accessToken,
                'x-amz-date'         => $formattedTimestamp,
                // (User-Agent and Host are set downstream in the internals of the OpenAPI
                // clients, using data captured in each client's config object.)
            ],
            'handler'  => $stack,
        ]);
    }
}
