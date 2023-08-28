<?php

namespace Tests\Clients\FbaInventoryV1\Api;

use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResponse;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\GetInventorySummariesResult;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Model\InventorySummary;
use Tests\TestCase;

class FbaInventoryApiTest extends TestCase
{
    public function test_getInventorySummaries()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->fbaInventoryV1()->getInventorySummariesWithHttpInfo(
                'Marketplace',
                'ATVPDKIKX0DER',
                ['ATVPDKIKX0DER'],
                'true'
            );
        });

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
