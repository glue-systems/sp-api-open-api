<?php

namespace Tests\Clients\SupplySourcesV20200701\Api;

use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\GetSupplySourcesResponse;
use Tests\TestCase;

class SupplySourcesApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_getSupplySources()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->supplySourcesV20200701()
                ->getSupplySourcesWithHttpInfo();
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
