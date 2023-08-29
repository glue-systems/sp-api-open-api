<?php

namespace Tests\Clients\FbaSmallAndLightV1\Api;

use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Model\SmallAndLightEnrollment;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Model\SmallAndLightEnrollmentStatus;
use Tests\TestCase;

class SmallAndLightApiTest extends TestCase
{
    public function test_getSmallAndLightEnrollmentBySellerSKU()
    {
        $result = $this->sp_api()
            ->fbaSmallAndLightV1()
            ->execute(function (SmallAndLightApi $smallAndLightApi) {
                return $smallAndLightApi->getSmallAndLightEnrollmentBySellerSKUWithHttpInfo(
                    'SKU_ENROLLED_IN_SMALL_AND_LIGHT',
                    ['ATVPDKIKX0DER']
                );
            });

        /**
         * @var SmallAndLightEnrollment $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(SmallAndLightEnrollment::class, $response);
        $this->assertNotEmpty($response->getSellerSKU());
        $this->assertEquals(SmallAndLightEnrollmentStatus::ENROLLED, $response->getStatus());
    }
}
