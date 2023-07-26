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
use Illuminate\Cache\StoreInterface;
use Psr\Http\Message\RequestInterface;

class ClientAuthenticator implements ClientAuthenticatorContract
{
    const LWA_ACCESS_TOKEN_CACHE_KEY = 'lwa_access_token';

    const CACHE_LIFE_BUFFER_IN_SECONDS = 60;

    /**
     * @var StoreInterface
     */
    protected $cache;

    /**
     * @var callable
     */
    protected $credentialProvider;

    /**
     * @var SPAPIConfig
     */
    protected $config;

    public function __construct(
        // TODO: Change to Illuminate\Contracts\Cache\Store in upgrading to PHP 7+.
        StoreInterface $cache,
        callable $credentialProvider,
        SPAPIConfig $config
    ) {
        $this->cache               = $cache;
        $this->credentialProvider  = $credentialProvider;
        $this->config              = $config;

        $this->config->validateConfig();
    }

    /**
     * @return SPAPIConfig
     */
    public function getConfig()
    {
        return clone $this->config;
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

        $this->cache->put(
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
            'base_uri' => $this->config->lwaOAuthBaseUrl,
        ]);

        $response = $guzzle->request('POST', '/auth/o2/token', [
            RequestOptions::JSON => [
                'grant_type'    => 'refresh_token',
                'refresh_token' => $this->config->lwaRefreshToken,
                'client_id'     => $this->config->lwaClientId,
                'client_secret' => $this->config->lwaClientSecret,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * @return ClientInterface
     */
    public function createAuthenticatedGuzzleClient()
    {
        $lwaAccessToken = $this->rememberLwaAccessToken();

        $now = new \DateTime('now', new \DateTimeZone('UTC'));

        $formattedTimestamp = $now->format('Ymd\THis\Z');

        return $this->_makeGuzzleClient($lwaAccessToken, $formattedTimestamp);
    }

    /**
     * @param string $lwaAccessToken
     * @param string $formattedTimestamp
     * @return ClientInterface
     */
    protected function _makeGuzzleClient($lwaAccessToken, $formattedTimestamp)
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
            'base_uri' => $this->config->spApiBaseUrl,
            'debug'    => $this->config->debug,
            'headers'  => [
                'x-amz-access-token' => $lwaAccessToken,
                'x-amz-date'         => $formattedTimestamp,
                // (User-Agent and Host are set downstream in the internals of the OpenAPI
                // clients, using data captured in each client's config object.)
            ],
            'handler'  => $stack,
        ]);
    }
}
