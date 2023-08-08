<?php

namespace Tests\Clients\CatalogItemsV20201201\Api;

use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Model\Item;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Model\ItemSearchResults;
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
        $catalogApi = $this->spApi->catalogItemsV20201201();

        $result = $catalogApi->searchCatalogItemsWithHttpInfo(
            ['red', 'polo', 'shirt'],
            ['ATVPDKIKX0DER'],
            'summaries'
        );

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
