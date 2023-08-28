<?php

namespace Tests\Clients\VendorDirectFulfillmentOrdersV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\GetOrdersResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Order;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\OrderList;
use Tests\TestCase;

class VendorOrdersApiTest extends TestCase
{
    public function test_getOrders()
    {
        $this->markTestIncomplete('Should revisit after regenerating clients via openapi-generator-cli option --additional-properties=enumUnknownDefaultCase=true');

        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->vendorDirectFulfillmentOrdersV1()->getOrdersWithHttpInfo(
                '2020-02-15T14:00:00-08:00',
                '2020-02-20T00:00:00-08:00',
                null,
                null,
                2,
                'DESC',
                null,
                'true'
            );
        });

        /**
         * @var GetOrdersResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetOrdersResponse::class, $response);
        $this->assertInstanceOf(OrderList::class, $payload = $response->getPayload());
        $this->assertNotEmpty($orders = $payload->getOrders());
        $this->assertInstanceOf(Order::class, $orders[0]);
    }
}
