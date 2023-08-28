<?php

namespace Tests\Clients\VendorDirectFulfillmentShippingV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\GetShippingLabelListResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\ShippingLabelList;
use Tests\TestCase;

class VendorShippingLabelsApiTest extends TestCase
{
    public function test_getShippingLabels()
    {
        $result = $this->sp_api()->vendorDirectFulfillmentShippingV1Labels(
            function (VendorShippingLabelsApi $vendorShippingLabelsApi) {
                return $vendorShippingLabelsApi->getShippingLabelsWithHttpInfo(
                    '2020-02-15T14:00:00-08:00',
                    '2020-02-20T00:00:00-08:00',
                    null,
                    2
                );
            }
        );

        /**
         * @var GetShippingLabelListResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetShippingLabelListResponse::class, $response);
        $this->assertInstanceOf(ShippingLabelList::class, $response->getPayload());
    }
}
