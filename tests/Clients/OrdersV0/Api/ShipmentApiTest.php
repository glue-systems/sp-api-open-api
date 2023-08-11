<?php

namespace Tests\Clients\OrdersV0\Api;

use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\ShipmentStatus;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\UpdateShipmentStatusRequest;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class ShipmentApiTest extends TestCase
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

    public function test_updateShipmentStatus()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->ordersV0Shipment()->updateShipmentStatusWithHttpInfo(
                'testOrder123',
                new UpdateShipmentStatusRequest([
                    'marketplaceId'  => $this->spApi->getSpApiConfig()->marketplaceId,
                    'shipmentStatus' => ShipmentStatus::READY_FOR_PICKUP,
                ])
            );
        });

        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 204);
        $this->assertNull($response);
    }
}
