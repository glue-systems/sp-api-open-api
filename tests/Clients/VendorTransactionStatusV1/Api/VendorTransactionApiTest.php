<?php

namespace Tests\Clients\VendorTransactionStatusV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Model\GetTransactionResponse;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Model\TransactionStatus;
use Tests\TestCase;

class VendorTransactionApiTest extends TestCase
{
    public function test_getTransaction()
    {
        $result = $this->sp_api()
            ->execute(function (VendorTransactionApi $vendorTransactionApi) {
                return $vendorTransactionApi->getTransactionWithHttpInfo(
                    '20190904190535-eef8cad8-418e-4ed3-ac72-789e2ee6214a'
                );
            });

        /**
         * @var GetTransactionResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetTransactionResponse::class, $response);
        $this->assertInstanceOf(TransactionStatus::class, $response->getPayload());
    }
}
