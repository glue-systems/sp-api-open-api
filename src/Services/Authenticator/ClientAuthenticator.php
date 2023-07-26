<?php

namespace Glue\SPAPI\OpenAPI\Services\Authenticator;

use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;
use Glue\SPAPI\OpenAPI\Utilities\Collection;
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
     * @var SPAPIConfig
     */
    protected $config;

    public function __construct(
        // TODO: Change to Illuminate\Contracts\Cache\Store in upgrading to PHP 7+.
        StoreInterface $cache,
        SPAPIConfig $config
    ) {
        $this->cache  = $cache;
        $this->config = $config;

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
                $authorizationHeader = $this->_deriveAuthorizationHeader($request, $formattedTimestamp);
                return $request->withHeader('Authorization', $authorizationHeader);
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

    /**
     * Creates an authorization header, which is necessary for creating a signed request that
     * meets the criteria described in the SP-API and AWS IAM docs. For more information, see:
     * https://developer-docs.amazon.com/sp-api/docs/connecting-to-the-selling-partner-api#step-4-create-and-sign-your-request
     * https://docs.aws.amazon.com/IAM/latest/UserGuide/create-signed-request.html
     * 
     * @param string $formattedTimestamp
     * @return string
     */
    protected function _deriveAuthorizationHeader(
        RequestInterface $request,
        $formattedTimestamp
    ) {
        $date              = substr($formattedTimestamp, 0, 8);
        $algorithm         = 'AWS4-HMAC-SHA256';
        $region            = 'us-east-1';
        $service           = 'execute-api';
        $terminationString = 'aws4_request';

        $accessKeyId     = $this->config->awsAccessKeyId;
        $secretAccessKey = $this->config->awsSecretAccessKey;

        list($canonicalRequest, $signedHeaders) = $this->_task1_createCanonicalRequest(
            $request
        );

        list($stringToSign, $credentialScope) = $this->_task2_createStringToSign(
            $canonicalRequest,
            $region,
            $service,
            $terminationString,
            $algorithm,
            $formattedTimestamp
        );

        $signature = $this->_task3_calculateSignature(
            $secretAccessKey,
            $date,
            $region,
            $service,
            $terminationString,
            $stringToSign
        );

        $authorizationHeader = $this->_task4_buildAuthorizationHeader(
            $algorithm,
            $accessKeyId,
            $credentialScope,
            $signedHeaders,
            $signature
        );

        return $authorizationHeader;
    }

    /**
     * @return array
     */
    protected function _task1_createCanonicalRequest(RequestInterface $request)
    {
        $method = $request->getMethod();

        $canonicalUri         = $this->_deriveCanonicalUri($request);
        $canonicalQueryString = $this->_deriveCanonicalQueryString($request);
        $canonicalHeaders     = $this->_deriveCanonicalHeaders($request);
        $signedHeaders        = $this->_deriveSignedHeaders($request);
        $hashedPayload        = $this->_deriveHashedPayload($request);

        $canonicalRequest = implode("\n", [
            $method,
            $canonicalUri,
            $canonicalQueryString,
            $canonicalHeaders,
            $signedHeaders,
            $hashedPayload,
        ]);

        return [
            $canonicalRequest,
            $signedHeaders,
        ];
    }

    /**
     * @param string $canonicalRequest
     * @param string $region
     * @param string $service
     * @param string $terminationString
     * @param string $algorithm
     * @param string $formattedTimestamp
     * @return array
     */
    protected function _task2_createStringToSign(
        $canonicalRequest,
        $region,
        $service,
        $terminationString,
        $algorithm,
        $formattedTimestamp
    ) {
        $date                   = substr($formattedTimestamp, 0, 8);
        $hashedCanonicalRequest = hash('sha256', $canonicalRequest);

        $credentialScope = implode('/', [
            $date,
            $region,
            $service,
            $terminationString,
        ]);

        $stringToSign = implode("\n", [
            $algorithm,
            $formattedTimestamp,
            $credentialScope,
            $hashedCanonicalRequest,
        ]);

        return [
            $stringToSign,
            $credentialScope,
        ];
    }

    /**
     * @param string $secretAccessKey
     * @param string $date
     * @param string $region
     * @param string $service
     * @param string $terminationString
     * @param string $stringToSign
     * @return string
     */
    protected function _task3_calculateSignature(
        $secretAccessKey,
        $date,
        $region,
        $service,
        $terminationString,
        $stringToSign
    ) {
        $kSecret  = $secretAccessKey;
        $kDate    = hash_hmac('sha256', $date, "AWS4" . $kSecret, true);
        $kRegion  = hash_hmac('sha256', $region, $kDate, true);
        $kService = hash_hmac('sha256', $service, $kRegion, true);
        $kSigning = hash_hmac('sha256', $terminationString, $kService, true);

        $signature = hash_hmac('sha256', $stringToSign, $kSigning);
        return $signature;
    }

    /**
     * @param string $algorithm
     * @param string $accessKeyId
     * @param string $credentialScope
     * @param string $signedHeaders
     * @param string $signature
     * @return string
     */
    protected function _task4_buildAuthorizationHeader(
        $algorithm,
        $accessKeyId,
        $credentialScope,
        $signedHeaders,
        $signature
    ) {
        return "$algorithm Credential=$accessKeyId/$credentialScope, SignedHeaders=$signedHeaders, Signature=$signature";
    }

    /**
     * @return string
     */
    protected function _deriveCanonicalUri(RequestInterface $request)
    {
        $uriPath = $request->getUri()->getPath();

        // Make sure uriPath starts with a forward slash.
        if (substr($uriPath, 0, 1) !== '/') {
            $uriPath = "/$uriPath";
        }

        $canonicalUriParts = Collection::make(explode('/', $uriPath))
            ->map(function ($routePathParam) {
                // AWS wants this url-encoded twice according to RFC 3986. Since guzzle and the
                // swagger-code-generated client seem to take care of url-encoding it once, this
                // extra call serves as the second time it is encoded.
                return rawurlencode($routePathParam);
            })->toArray();

        return implode('/', $canonicalUriParts);
    }

    /**
     * @return string
     */
    protected function _deriveCanonicalQueryString(RequestInterface $request)
    {
        $uri         = $request->getUri();
        $queryString = $uri->getQuery();
        $queryArray  = [];
        parse_str($queryString, $queryArray);

        $valuesSorted = Collection::make($queryArray)
            ->map(function ($paramValue, $paramKey) {
                return [
                    'paramKey'   => trim($paramKey),
                    'paramValue' => is_array($paramValue)
                        ? Collection::make($paramValue)
                        ->sort(function ($valueA, $valueB) {
                            // Sort values by character code, not alphabetical order.
                            return $valueA > $valueB;
                        })
                        ->values()
                        ->map(function ($value) {
                            return trim($value);
                        })
                        ->toArray()
                        : trim($paramValue),
                ];
            });

        $keysAndValuesSorted = $valuesSorted
            ->sort(function (array $queryParamA, array $queryParamB) {
                return $queryParamA['paramKey'] > $queryParamB['paramKey'];
            })
            ->values();

        $flattened = $keysAndValuesSorted
            ->map(function (array $queryParam) {
                $encodedKey = rawurlencode($queryParam['paramKey']);
                $paramValue = $queryParam['paramValue'];
                if (is_array($paramValue)) {
                    return Collection::make($paramValue)
                        ->reduce(function ($acc, $curr) use ($encodedKey) {
                            $encodedValue = $this->_encodeQueryParamValue($curr);
                            $encodedPair  = $encodedKey . "[]=$encodedValue";
                            return $acc === ''
                                ? $encodedPair
                                : "$acc&$encodedPair";
                        }, '');
                }
                $encodedValue = $this->_encodeQueryParamValue($paramValue);
                return "$encodedKey=$encodedValue";
            })
            ->toArray();

        return implode('&', $flattened);
    }

    /**
     * @return string
     */
    protected function _deriveCanonicalHeaders(RequestInterface $request)
    {
        $headers = Collection::make($request->getHeaders());

        $cleanHeaders = $headers->mapWithKeys(function ($headerValues, $headerKey) {
            $cleanHeaderValues = Collection::make($headerValues)
                ->map(function ($value) {
                    // Trims whitespace before and after headerValues,
                    // and convert sequential spaces to a single space.
                    $cleanValue   = trim($value);
                    $cleanerValue = preg_replace('!\s+!', ' ', $cleanValue);
                    return $cleanerValue;
                })->toArray();
            return [
                strtolower($headerKey) => implode(',', $cleanHeaderValues),
            ];
        });

        $canonicalHeadersList = $cleanHeaders
            ->sortKeys()
            ->map(function ($implodedCleanHeaderValues, $cleanHeaderKey) {
                return "$cleanHeaderKey:$implodedCleanHeaderValues";
            })
            ->values()
            ->toArray();

        return implode("\n", $canonicalHeadersList) . "\n";
    }

    /**
     * @return string
     */
    protected function _deriveSignedHeaders(RequestInterface $request)
    {
        $headers = Collection::make($request->getHeaders());

        $cleanHeaderKeys = Collection::make($headers->keys())
            ->map(function ($headerKey) {
                return strtolower(trim($headerKey));
            })->toArray();

        sort($cleanHeaderKeys);

        return implode(';', $cleanHeaderKeys);
    }

    /**
     * @return string
     */
    protected function _deriveHashedPayload(RequestInterface $request)
    {
        $requestCopy = clone $request;
        $payload     = $requestCopy->getBody()->getContents();
        return hash('sha256', $payload);
    }

    /**
     * @param string $value
     * @return string
     */
    protected function _encodeQueryParamValue($value)
    {
        // AWS wants query param values to be URL encoded once
        // but equals signs (=) to be encoded twice.
        $cleanValue = str_replace('=', rawurlencode('='), $value);
        return rawurlencode($cleanValue);
    }
}
