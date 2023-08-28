<?php

namespace Tests\Clients\ServicesV1\Api;

use Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Model\CancelServiceJobByServiceJobIdResponse;
use Tests\TestCase;

class ServiceApiTest extends TestCase
{
    public function test_cancelServiceJobByServiceJobId()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()->servicesV1(function (ServiceApi $serviceApi) {
                return $serviceApi->cancelServiceJobByServiceJobIdWithHttpInfo(
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
