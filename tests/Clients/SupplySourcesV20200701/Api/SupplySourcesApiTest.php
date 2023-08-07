<?php

namespace Tests\Clients\SupplySourcesV20200701\Api;

use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Model\GetSupplySourcesResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class SupplySourcesApiTest extends TestCase
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

    public function test_getSupplySources()
    {
        $supplySourcesApi  = $this->spApi->supplySourcesV20200701();

        $result = $supplySourcesApi->getSupplySourcesWithHttpInfo();

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
