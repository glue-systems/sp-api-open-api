<?php

namespace Tests\Clients\MerchantFulfillmentV0\Api;

use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\GetShipmentResponse;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Model\Shipment;
use Tests\TestCase;

class MerchantFulfillmentApiTest extends TestCase
{
    public function test_getShipment()
    {
        $result = $this->sp_api()
            ->merchantFulfillmentV0(function (MerchantFulfillmentApi $merchantFulfillmentApi) {
                return $merchantFulfillmentApi->getShipmentWithHttpInfo(
                    'abcddcba-00c3-4f6f-a63a-639f76ee9253'
                );
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
