<?php

namespace Tests\Clients\SupplySourcesV20200701\Api;

use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\GetSupplySourcesResponse;
use Tests\TestCase;

class SupplySourcesApiTest extends TestCase
{
    public function test_getSupplySources()
    {
        $result = $this->sp_api()
            ->supplySourcesV20200701(function (SupplySourcesApi $supplySourcesApi) {
                return $supplySourcesApi->getSupplySourcesWithHttpInfo();
            });

        /**
         * @var GetSupplySourcesResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetSupplySourcesResponse::class, $response);
        $this->assertNotEmpty($supplySources = $response->getSupplySources());
        $this->assertArrayHasKey('supplySourceId', $supplySources[0]);
    }
}
