<?php

namespace Tests\Clients\FbaInventoryV1\Api;

use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResult;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\InventorySummary;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class FbaInventoryApiTest extends TestCase
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
        $fbaInventoryApi = $this->spApi->fbaInventoryV1();

        $result = $fbaInventoryApi->getInventorySummariesWithHttpInfo(
            'Marketplace',
            'ATVPDKIKX0DER',
            ['ATVPDKIKX0DER'],
            'true'
        );

        /**
         * @var GetInventorySummariesResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetInventorySummariesResponse::class, $response);
        $this->assertInstanceOf(GetInventorySummariesResult::class, $inventorySummariesResult = $response->getPayload());
        $this->assertNotEmpty($inventorySummaries = $inventorySummariesResult->getInventorySummaries());
        $this->assertInstanceOf(InventorySummary::class, $inventorySummaries[0]);
        $this->assertNotEmpty($inventorySummaries[0]->getAsin());
    }
}
