<?php

namespace Tests\Clients\OrdersV0\Api;

use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\GetOrderResponse;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\GetOrdersResponse;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\Order;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Model\OrdersList;
use Tests\TestCase;

class OrdersV0ApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_getOrders()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->ordersV0()->getOrdersWithHttpInfo(
                [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId],
                // Using this specific string value as a quirky requirement of the sandbox API (see models/ordersV0.json)
                'TEST_CASE_200'
            );
        });

        /**
         * @var GetOrdersResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetOrdersResponse::class, $response);
        $this->assertInstanceOf(OrdersList::class, $payload = $response->getPayload());
        $this->assertNotEmpty($orders = $payload->getOrders());
        $this->assertInstanceOf(Order::class, $orders[0]);
    }

    public function test_getOrder()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->ordersV0()->getOrderWithHttpInfo(
                // Using this specific string value as a quirky requirement of the sandbox API (see models/ordersV0.json)
                'TEST_CASE_200'
            );
        });

        /**
         * @var GetOrderResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetOrderResponse::class, $response);
        $this->assertInstanceOf(Order::class, $order = $response->getPayload());
        $this->assertNotEmpty($order->getFulfillmentChannel());
    }
}
