<?php

namespace Tests\Clients\ListingsItems\Api;

use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Model\ListingsItemSubmissionResponse;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class ListingsApiTest extends TestCase
{
    /**
     * @var ClientFactory
     */
    public $clientFactory;

    public function setUp(): void
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
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    public function test_putListingsItem()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
