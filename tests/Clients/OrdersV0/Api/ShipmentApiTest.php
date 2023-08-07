<?php

namespace Tests\Clients\OrdersV0\Api;

use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\ShipmentStatus;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\UpdateShipmentStatusRequest;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class ShipmentApiTest extends TestCase
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

    public function test_updateShipmentStatus()
    {
        $shipmentApi  = $this->clientFactory->createOrdersV0ShipmentApiClient();

        $result = $shipmentApi->updateShipmentStatusWithHttpInfo(
            'testOrder123',
            new UpdateShipmentStatusRequest([
                'marketplace_id'  => $this->clientFactory->getSpApiConfig()->marketplaceId,
                'shipment_status' => ShipmentStatus::READY_FOR_PICKUP
            ])
        );

        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 204);
        $this->assertNull($response);
    }
}
