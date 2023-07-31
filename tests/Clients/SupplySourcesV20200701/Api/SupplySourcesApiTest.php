<?php

namespace Tests\Clients\SupplySourcesV20200701\Api;

use Glue\SPAPI\OpenAPI\Clients\SupplySourcesV20200701\Model\GetSupplySourcesResponse;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class SupplySourcesApiTest extends TestCase
{
    /**
     * @var ClientFactory
     */
    public $clientFactory;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->clientFactory = $this->buildClientFactory();
    }

    public function test_getSupplySources()
    {
        $supplySourcesApi  = $this->clientFactory->createSupplySourcesV20200701ApiClient();

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
