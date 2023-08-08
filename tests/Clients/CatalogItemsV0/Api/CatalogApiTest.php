<?php

namespace Tests\Clients\CatalogItemsV0\Api;

use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Model\ListCatalogItemsResponse;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Model\ListMatchingItemsResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class CatalogApiTest extends TestCase
{
    /**
     * @var SpApi
     */
    public $spApi;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->spApi = $this->buildSpApiContainer();
    }

    public function test_searchContentDocuments()
    {
        $catalogApi = $this->spApi->catalogItemsV0();

        $result = $catalogApi->listCatalogItemsWithHttpInfo(
            'TEST_CASE_200',
            null,
            null,
            'SKU_200'
        );

        /**
         * @var ListCatalogItemsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListCatalogItemsResponse::class, $response);
        $this->assertInstanceOf(ListMatchingItemsResponse::class, $response->getPayload());
    }
}
