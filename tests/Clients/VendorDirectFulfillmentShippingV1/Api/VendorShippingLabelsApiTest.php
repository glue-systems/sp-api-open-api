<?php

namespace Tests\Clients\VendorDirectFulfillmentOrdersV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\GetShippingLabelListResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\ShippingLabelList;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class VendorShippingLabelsApiTest extends TestCase
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

    public function test_getShippingLabels()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->vendorDirectFulfillmentShippingV1Labels()
                ->getShippingLabelsWithHttpInfo(
                    '2020-02-15T14:00:00-08:00',
                    '2020-02-20T00:00:00-08:00',
                    null,
                    2
                );
        });

        /**
         * @var GetShippingLabelListResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetShippingLabelListResponse::class, $response);
        $this->assertInstanceOf(ShippingLabelList::class, $response->getPayload());
    }
}
