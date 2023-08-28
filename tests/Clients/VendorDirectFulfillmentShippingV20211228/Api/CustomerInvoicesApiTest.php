<?php

namespace Tests\Clients\VendorDirectFulfillmentShippingV20211228\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Model\CustomerInvoiceList;
use Tests\TestCase;

class CustomerInvoicesApiTest extends TestCase
{
    public function test_getCustomerInvoices()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()->vendorDirectFulfillmentShippingV20211228CustomerInvoices(
                function (CustomerInvoicesApi $customerInvoicesApi) {
                    return $customerInvoicesApi->getCustomerInvoicesWithHttpInfo(
                        '2020-02-15T14:00:00-08:00',
                        '2020-02-20T00:00:00-08:00',
                        null,
                        2,
                        'DESC'
                    );
                }
            );
        });

        /**
         * @var CustomerInvoiceList $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(CustomerInvoiceList::class, $response);
    }
}
