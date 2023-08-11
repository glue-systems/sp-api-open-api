<?php

namespace Tests\Clients\ServicesV1\Api;

use Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\CancelServiceJobByServiceJobIdResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
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
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->spApi->execute(function () {
                return $this->spApi->servicesV1()->cancelServiceJobByServiceJobIdWithHttpInfo(
                    'validJobId-48b6d5a3-b708-dbe9-038d-dd95e8d74iut',
                    'V1'
                );
            });
        });

        /**
         * @var CancelServiceJobByServiceJobIdResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(CancelServiceJobByServiceJobIdResponse::class, $response);
    }
}
