<?php

namespace Tests\Clients\ServicesV1\Api;

use Glue\SpApi\OpenAPI\Clients\ServicesV1\ApiException;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\CancelServiceJobByServiceJobIdResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use GuzzleHttp\Psr7\Stream;
use Tests\TestCase;

class ServiceApiTest extends TestCase
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

    public function test_cancelServiceJobByServiceJobId()
    {
        $serviceApi = $this->spApi->servicesV1();

        try {
            $result = $serviceApi->cancelServiceJobByServiceJobIdWithHttpInfo(
                'validJobId-48b6d5a3-b708-dbe9-038d-dd95e8d74iut',
                'V1'
            );
        } catch (ApiException $ex) {
            $body = $ex->getResponseBody();
            if ($body instanceof Stream) {
                $contents = $body->getContents();
            }
            if ($ex->getCode() === 403) {
                $this->markTestSkipped('Unauthorized, possibly due to Developer Account settings on Seller Central.');
            }
            throw $ex;
        }

        /**
         * @var CancelServiceJobByServiceJobIdResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(CancelServiceJobByServiceJobIdResponse::class, $response);
    }
}
