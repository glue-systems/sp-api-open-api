<?php

namespace Tests\Clients\VendorDirectFulfillmentOrdersV20211228\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\Order;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Model\OrderList;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class VendorOrdersApiTest extends TestCase
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

    public function test_getOrders()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->spApi->execute(function () {
                return $this->spApi->vendorDirectFulfillmentOrdersV20211228()->getOrdersWithHttpInfo(
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
        });

        /**
         * @var OrderList $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(OrderList::class, $response);
        $this->assertNotEmpty($orders = $response->getOrders());
        $this->assertInstanceOf(Order::class, $orders[0]);
    }
}
