<?php

namespace Tests\Clients\VendorDirectFulfillmentShippingV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\GetPackingSlipListResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\PackingSlipList;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class VendorShippingApiTest extends TestCase
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

    public function test_getPackingSlips()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->vendorDirectFulfillmentShippingV1()
                ->getPackingSlipsWithHttpInfo(
                    '2020-02-15T14:00:00-08:00',
                    '2020-02-20T00:00:00-08:00',
                    null,
                    2,
                    'DESC'
                );
        });

        /**
         * @var GetPackingSlipListResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetPackingSlipListResponse::class, $response);
        $this->assertInstanceOf(PackingSlipList::class, $response->getPayload());
    }
}
