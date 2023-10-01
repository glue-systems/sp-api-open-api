<?php

namespace Tests\Clients\VendorDirectFulfillmentShippingV20211228\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Model\PackingSlipList;
use Tests\TestCase;

class VendorShippingApiTest extends TestCase
{
    public function test_getPackingSlips()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (VendorShippingApi $vendorShippingApi) {
                    return $vendorShippingApi->getPackingSlipsWithHttpInfo(
                        '2020-02-15T14:00:00-08:00',
                        '2020-02-20T00:00:00-08:00',
                        null,
                        2,
                        'DESC'
                    );
                });
        });

        /**
         * @var PackingSlipList $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(PackingSlipList::class, $response);
    }
}
