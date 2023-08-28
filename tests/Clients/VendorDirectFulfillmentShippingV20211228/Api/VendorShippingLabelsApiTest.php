<?php

namespace Tests\Clients\VendorDirectFulfillmentShippingV20211228\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Model\ShippingLabelList;
use Tests\TestCase;

class VendorShippingLabelsApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_getShippingLabels()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()->execute(function () {
                return $this->sp_api()->vendorDirectFulfillmentShippingV20211228Labels()
                    ->getShippingLabelsWithHttpInfo(
                        '2020-02-15T14:00:00-08:00',
                        '2020-02-20T00:00:00-08:00',
                        null,
                        2
                    );
            });
        });

        /**
         * @var ShippingLabelList $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ShippingLabelList::class, $response);
    }
}
