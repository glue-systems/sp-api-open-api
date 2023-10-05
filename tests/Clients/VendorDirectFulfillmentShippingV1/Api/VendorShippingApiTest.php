<?php

namespace Tests\Clients\VendorDirectFulfillmentShippingV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\CustomerInvoiceList;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\GetCustomerInvoicesResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\GetPackingSlipListResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\GetShippingLabelListResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\PackingSlipList;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\ShippingLabelList;
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
         * @var GetPackingSlipListResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetPackingSlipListResponse::class, $response);
        $this->assertInstanceOf(PackingSlipList::class, $response->getPayload());
    }

    public function test_getCustomerInvoices()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (VendorShippingApi $vendorShippingApi) {
                    return $vendorShippingApi->getCustomerInvoicesWithHttpInfo(
                        '2020-02-15T14:00:00-08:00',
                        '2020-02-20T00:00:00-08:00',
                        null,
                        2,
                        'DESC'
                    );
                });
        });

        /**
         * @var GetCustomerInvoicesResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetCustomerInvoicesResponse::class, $response);
        $this->assertInstanceOf(CustomerInvoiceList::class, $response->getPayload());
    }

    public function test_getShippingLabels()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (VendorShippingApi $vendorShippingApi) {
                    return $vendorShippingApi->getShippingLabelsWithHttpInfo(
                        '2020-02-15T14:00:00-08:00',
                        '2020-02-20T00:00:00-08:00',
                        null,
                        2
                    );
                });
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
