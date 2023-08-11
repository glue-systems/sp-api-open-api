<?php

namespace Tests\Clients\VendorDirectFulfillmentShippingV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\CustomerInvoiceList;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Model\GetCustomerInvoicesResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class CustomerInvoicesApiTest extends TestCase
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

    public function test_getCustomerInvoices()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->vendorDirectFulfillmentShippingV1CustomerInvoices()
                ->getCustomerInvoicesWithHttpInfo(
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
