<?php

namespace Tests\Clients\OrdersV0\Api;

use Glue\SPAPI\OpenAPI\Clients\OrdersV0\ApiException;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\GetOrdersResponse;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\Order;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Model\OrdersList;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use GuzzleHttp\Psr7\Stream;
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
        // Using this specific string value is a quirky requirement of the sandbox API:
        // https://github.com/amzn/selling-partner-api-docs/issues/2013#issuecomment-1190071175
        $createdAfter = 'TEST_CASE_200';
        try {
            $result = $ordersV0Api->getOrdersWithHttpInfo(
                [$this->clientFactory->getConfig()->marketplaceId],
                $createdAfter
            );
        } catch (ApiException $ex) {
            $body = $ex->getResponseBody();
            if ($body instanceof Stream) {
                $contents = $body->getContents();
                echo "\n\n$contents\n\n";
            }
            throw $ex;
        }

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
}
