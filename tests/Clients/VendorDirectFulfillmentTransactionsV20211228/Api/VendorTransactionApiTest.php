<?php

namespace Tests\Clients\VendorDirectFulfillmentTransactionsV20211228\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Model\TransactionStatus;
use Tests\TestCase;

class VendorTransactionApiTest extends TestCase
{
    public function test_getTransactionStatus()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()->execute(function () {
                return $this->sp_api()->vendorDirectFulfillmentTransactionsV20211228()
                    ->getTransactionStatusWithHttpInfo('20190904190535-eef8cad8-418e-4ed3-ac72-789e2ee6214a');
            });
        });

        /**
         * @var TransactionStatus $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(TransactionStatus::class, $response);
    }
}
