<?php

namespace Tests\Clients\ShipmentInvoicingV0\Api;

use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\GetShipmentDetailsResponse;
use Tests\TestCase;

class ShipmentInvoiceApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_getShipmentDetails()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()->execute(function () {
                return $this->sp_api()->shipmentInvoicingV0()
                    ->getShipmentDetailsWithHttpInfo('shipmentId1');
            });
        });

        /**
         * @var GetShipmentDetailsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetShipmentDetailsResponse::class, $response);
    }
}
