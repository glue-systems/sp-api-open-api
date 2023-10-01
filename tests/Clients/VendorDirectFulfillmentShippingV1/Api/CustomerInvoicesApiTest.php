<?php

namespace Tests\Clients\VendorDirectFulfillmentShippingV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\CustomerInvoiceList;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\GetCustomerInvoicesResponse;
use Tests\TestCase;

class CustomerInvoicesApiTest extends TestCase
{
    public function test_getCustomerInvoices()
    {
        $result = $this->sp_api()
            ->execute(function (CustomerInvoicesApi $customerInvoicesApi) {
                return $customerInvoicesApi->getCustomerInvoicesWithHttpInfo(
                    '2020-02-15T14:00:00-08:00',
                    '2020-02-20T00:00:00-08:00',
                    null,
                    2,
                    'DESC'
                );
            });

        /**
         * @var GetCustomerInvoicesResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetCustomerInvoicesResponse::class, $response);
        $this->assertInstanceOf(CustomerInvoiceList::class, $response->getPayload());
    }
}
