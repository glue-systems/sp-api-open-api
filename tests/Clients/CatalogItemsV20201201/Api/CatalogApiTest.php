<?php

namespace Tests\Clients\CatalogItemsV20201201\Api;

use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Model\Item;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Model\ItemSearchResults;
use Tests\TestCase;

class CatalogApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_searchCatalogItems()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->catalogItemsV20201201()->searchCatalogItemsWithHttpInfo(
                ['red', 'polo', 'shirt'],
                ['ATVPDKIKX0DER'],
                'summaries'
            );
        });

        /**
         * @var ItemSearchResults $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ItemSearchResults::class, $response);
        $this->assertNotEmpty($items = $response->getItems());
        $this->assertInstanceOf(Item::class, $items[0]);
    }
}
