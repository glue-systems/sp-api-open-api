<?php

namespace Tests\Clients\VendorTransactionStatusV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Model\GetTransactionResponse;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Model\TransactionStatus;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class VendorTransactionApiTest extends TestCase
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

    public function test_getTransaction()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->vendorTransactionStatusV1()
                ->getTransactionWithHttpInfo('20190904190535-eef8cad8-418e-4ed3-ac72-789e2ee6214a');
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
