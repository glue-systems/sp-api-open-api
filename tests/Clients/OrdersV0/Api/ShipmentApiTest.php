<?php

namespace Tests\Clients\OrdersV0\Api;

use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\ShipmentStatus;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\UpdateShipmentStatusRequest;
use Tests\TestCase;

class ShipmentApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_updateShipmentStatus()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->ordersV0Shipment()->updateShipmentStatusWithHttpInfo(
                'testOrder123',
                new UpdateShipmentStatusRequest([
                    'marketplaceId'  => $this->sp_api()->getSpApiConfig()->defaultMarketplaceId,
                    'shipmentStatus' => ShipmentStatus::READY_FOR_PICKUP,
                ])
            );
        });

        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 204);
        $this->assertNull($response);
    }
}
