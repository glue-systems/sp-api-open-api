<?php

namespace Tests\Clients\ListingsItems\Api;

use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Model\ListingsItemPatchRequest;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Model\ListingsItemPutRequest;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Model\ListingsItemSubmissionResponse;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class ListingsApiTest extends TestCase
{
    /**
     * @var ClientFactory
     */
    public $clientFactory;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->clientFactory = $this->buildClientFactory();
    }

    public function test_deleteListingsItem()
    {
        $listingsApi = $this->clientFactory->createListingsItemsApiClient();

        $result = $listingsApi->deleteListingsItemWithHttpInfo(
            $this->clientFactory->getConfig()->sellerId,
            'TESTSKU123',
            [$this->clientFactory->getConfig()->marketplaceId]
        );

        /**
         * @var ListingsItemSubmissionResponse $responseBody
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListingsItemSubmissionResponse::class, $response);
        $this->assertNotEmpty($response->getSubmissionId());
    }

    public function test_patchListingsItem()
    {
        $listingsApi = $this->clientFactory->createListingsItemsApiClient();

        $result = $listingsApi->patchListingsItemWithHttpInfo(
            $this->clientFactory->getConfig()->sellerId,
            'TESTSKU123',
            [$this->clientFactory->getConfig()->marketplaceId],
            new ListingsItemPatchRequest()
        );

        /**
         * @var ListingsItemSubmissionResponse $responseBody
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListingsItemSubmissionResponse::class, $response);
        $this->assertNotEmpty($response->getSubmissionId());
    }

    public function test_putListingsItem()
    {
        $listingsApi = $this->clientFactory->createListingsItemsApiClient();

        $result = $listingsApi->putListingsItemWithHttpInfo(
            $this->clientFactory->getConfig()->sellerId,
            'TESTSKU123',
            [$this->clientFactory->getConfig()->marketplaceId],
            new ListingsItemPutRequest()
        );

        /**
         * @var ListingsItemSubmissionResponse $responseBody
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListingsItemSubmissionResponse::class, $response);
        $this->assertNotEmpty($response->getSubmissionId());
    }
}
