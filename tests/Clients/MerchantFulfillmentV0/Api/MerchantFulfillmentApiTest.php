<?php

namespace Tests\Clients\MerchantFulfillmentV0\Api;

use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\GetShipmentResponse;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\Shipment;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class MerchantFulfillmentApiTest extends TestCase
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

    public function test_getShipment()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->merchantFulfillmentV0()
                ->getShipmentWithHttpInfo('abcddcba-00c3-4f6f-a63a-639f76ee9253');
        });

        /**
         * @var GetShipmentResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetShipmentResponse::class, $response);
        $this->assertInstanceOf(Shipment::class, $shipment = $response->getPayload());
        $this->assertNotEmpty($shipment->getTrackingId());
    }
}
