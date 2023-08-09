<?php

namespace Tests\Clients\ShipmentInvoicingV0\Api;

use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\ApiException;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Model\GetShipmentDetailsResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class ShipmentInvoiceApiTest extends TestCase
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

    public function test_getShipmentDetails()
    {
        $result = $this->tryButSkipIfUnauthorized(ApiException::class, function () {
            $shipmentInvoiceApi = $this->spApi->shipmentInvoicingV0();
            return $shipmentInvoiceApi->getShipmentDetailsWithHttpInfo(
                'shipmentId1'
            );
        });

        /**
         * @var GetShipmentDetailsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetShipmentDetailsResponse::class, $response);
    }
}
