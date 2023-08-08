<?php

namespace Tests\Clients\FbaSmallAndLightV1\Api;

use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Model\SmallAndLightEnrollment;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Model\SmallAndLightEnrollmentStatus;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class SmallAndLightApiTest extends TestCase
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

    public function test_searchContentDocuments()
    {
        $smallAndLightApi = $this->spApi->fbaSmallAndLightV1();

        $result = $smallAndLightApi->getSmallAndLightEnrollmentBySellerSKUWithHttpInfo(
            'SKU_ENROLLED_IN_SMALL_AND_LIGHT',
            ['ATVPDKIKX0DER']
        );

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
