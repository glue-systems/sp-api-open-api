<?php
/**
 * FbaInventoryApi
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FbaInventoryV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for FBA Inventory
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Configuration;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\HeaderSelector;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\ObjectSerializer;

/**
 * FbaInventoryApi Class Doc Comment
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\FbaInventoryV1
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FbaInventoryApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getInventorySummaries
     *
     * @param  string $granularityType The granularity type for the inventory aggregation level. (required)
     * @param  string $granularityId The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplaceIds The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $startDateTime A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $sellerSkus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $sellerSku A single seller SKU used for querying the specified seller SKU inventory summaries. (optional)
     * @param  string $nextToken String token returned in the response of your previous request. The string token will expire 30 seconds after being created. (optional)
     *
     * @throws \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse
     */
    public function getInventorySummaries($granularityType, $granularityId, $marketplaceIds, $details = false, $startDateTime = null, $sellerSkus = null, $sellerSku = null, $nextToken = null)
    {
        list($response) = $this->getInventorySummariesWithHttpInfo($granularityType, $granularityId, $marketplaceIds, $details, $startDateTime, $sellerSkus, $sellerSku, $nextToken);
        return $response;
    }

    /**
     * Operation getInventorySummariesWithHttpInfo
     *
     * @param  string $granularityType The granularity type for the inventory aggregation level. (required)
     * @param  string $granularityId The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplaceIds The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $startDateTime A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $sellerSkus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $sellerSku A single seller SKU used for querying the specified seller SKU inventory summaries. (optional)
     * @param  string $nextToken String token returned in the response of your previous request. The string token will expire 30 seconds after being created. (optional)
     *
     * @throws \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse|\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventorySummariesWithHttpInfo($granularityType, $granularityId, $marketplaceIds, $details = false, $startDateTime = null, $sellerSkus = null, $sellerSku = null, $nextToken = null)
    {
        $request = $this->getInventorySummariesRequest($granularityType, $granularityId, $marketplaceIds, $details, $startDateTime, $sellerSkus, $sellerSku, $nextToken);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 429:
                    if ('\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 503:
                    if ('\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getInventorySummariesAsync
     *
     * 
     *
     * @param  string $granularityType The granularity type for the inventory aggregation level. (required)
     * @param  string $granularityId The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplaceIds The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $startDateTime A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $sellerSkus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $sellerSku A single seller SKU used for querying the specified seller SKU inventory summaries. (optional)
     * @param  string $nextToken String token returned in the response of your previous request. The string token will expire 30 seconds after being created. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventorySummariesAsync($granularityType, $granularityId, $marketplaceIds, $details = false, $startDateTime = null, $sellerSkus = null, $sellerSku = null, $nextToken = null)
    {
        return $this->getInventorySummariesAsyncWithHttpInfo($granularityType, $granularityId, $marketplaceIds, $details, $startDateTime, $sellerSkus, $sellerSku, $nextToken)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInventorySummariesAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $granularityType The granularity type for the inventory aggregation level. (required)
     * @param  string $granularityId The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplaceIds The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $startDateTime A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $sellerSkus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $sellerSku A single seller SKU used for querying the specified seller SKU inventory summaries. (optional)
     * @param  string $nextToken String token returned in the response of your previous request. The string token will expire 30 seconds after being created. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventorySummariesAsyncWithHttpInfo($granularityType, $granularityId, $marketplaceIds, $details = false, $startDateTime = null, $sellerSkus = null, $sellerSku = null, $nextToken = null)
    {
        $returnType = '\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse';
        $request = $this->getInventorySummariesRequest($granularityType, $granularityId, $marketplaceIds, $details, $startDateTime, $sellerSkus, $sellerSku, $nextToken);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getInventorySummaries'
     *
     * @param  string $granularityType The granularity type for the inventory aggregation level. (required)
     * @param  string $granularityId The granularity ID for the inventory aggregation level. (required)
     * @param  string[] $marketplaceIds The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param  bool $details true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param  \DateTime $startDateTime A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param  string[] $sellerSkus A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param  string $sellerSku A single seller SKU used for querying the specified seller SKU inventory summaries. (optional)
     * @param  string $nextToken String token returned in the response of your previous request. The string token will expire 30 seconds after being created. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInventorySummariesRequest($granularityType, $granularityId, $marketplaceIds, $details = false, $startDateTime = null, $sellerSkus = null, $sellerSku = null, $nextToken = null)
    {
        // verify the required parameter 'granularityType' is set
        if ($granularityType === null || (is_array($granularityType) && count($granularityType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granularityType when calling getInventorySummaries'
            );
        }
        // verify the required parameter 'granularityId' is set
        if ($granularityId === null || (is_array($granularityId) && count($granularityId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $granularityId when calling getInventorySummaries'
            );
        }
        // verify the required parameter 'marketplaceIds' is set
        if ($marketplaceIds === null || (is_array($marketplaceIds) && count($marketplaceIds) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplaceIds when calling getInventorySummaries'
            );
        }
        if (count($marketplaceIds) > 1) {
            throw new \InvalidArgumentException('invalid value for "$marketplaceIds" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 1.');
        }

        if ($sellerSkus !== null && count($sellerSkus) > 50) {
            throw new \InvalidArgumentException('invalid value for "$sellerSkus" when calling FbaInventoryApi.getInventorySummaries, number of items must be less than or equal to 50.');
        }


        $resourcePath = '/fba/inventory/v1/summaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($details !== null) {
            $queryParams['details'] = ObjectSerializer::toQueryValue($details);
        }
        // query params
        if ($granularityType !== null) {
            $queryParams['granularityType'] = ObjectSerializer::toQueryValue($granularityType);
        }
        // query params
        if ($granularityId !== null) {
            $queryParams['granularityId'] = ObjectSerializer::toQueryValue($granularityId);
        }
        // query params
        if ($startDateTime !== null) {
            $queryParams['startDateTime'] = ObjectSerializer::toQueryValue($startDateTime);
        }
        // query params
        if (is_array($sellerSkus)) {
            $sellerSkus = ObjectSerializer::serializeCollection($sellerSkus, 'csv', true);
        }
        if ($sellerSkus !== null) {
            $queryParams['sellerSkus'] = ObjectSerializer::toQueryValue($sellerSkus);
        }
        // query params
        if ($sellerSku !== null) {
            $queryParams['sellerSku'] = ObjectSerializer::toQueryValue($sellerSku);
        }
        // query params
        if ($nextToken !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($nextToken);
        }
        // query params
        if (is_array($marketplaceIds)) {
            $marketplaceIds = ObjectSerializer::serializeCollection($marketplaceIds, 'csv', true);
        }
        if ($marketplaceIds !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplaceIds);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
