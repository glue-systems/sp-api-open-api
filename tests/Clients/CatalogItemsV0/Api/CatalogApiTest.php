<?php

namespace Tests\Clients\CatalogItemsV0\Api;

use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Model\ListCatalogItemsResponse;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Model\ListMatchingItemsResponse;
use Tests\TestCase;

class CatalogApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_listCatalogItems()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->catalogItemsV0()
                ->listCatalogItemsWithHttpInfo('TEST_CASE_200', null, null, 'SKU_200');
        });

        /**
         * @var ListCatalogItemsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListCatalogItemsResponse::class, $response);
        $this->assertInstanceOf(ListMatchingItemsResponse::class, $response->getPayload());
    }
}
