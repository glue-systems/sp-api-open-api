<?php

namespace Tests\Clients\OrdersV0\Api;

use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\GetOrderResponse;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\GetOrdersResponse;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\Order;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\OrdersList;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class OrdersV0ApiTest extends TestCase
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

    public function test_getOrders()
    {
        $ordersV0Api  = $this->clientFactory->createOrdersV0ApiClient();
        // Using this specific string value as a quirky requirement of the sandbox API (see models/ordersV0.json)
        $createdAfter = 'TEST_CASE_200';

        $result = $ordersV0Api->getOrdersWithHttpInfo(
            [$this->clientFactory->getSpApiConfig()->marketplaceId],
            $createdAfter
        );

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
        $ordersV0Api  = $this->clientFactory->createOrdersV0ApiClient();
        // Using this specific string value as a quirky requirement of the sandbox API (see models/ordersV0.json)
        $orderId = 'TEST_CASE_200';

        $result = $ordersV0Api->getOrderWithHttpInfo(
            $orderId
        );

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
