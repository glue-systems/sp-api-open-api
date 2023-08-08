<?php

namespace Tests\Clients\FbaInboundEligibilityV1\Api;

use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Model\GetItemEligibilityPreviewResponse;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Model\ItemEligibilityPreview;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class FbaInboundApiTest extends TestCase
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
        $fbaInboundApi = $this->spApi->fbaInboundEligibilityV1();

        $result = $fbaInboundApi->getItemEligibilityPreviewWithHttpInfo(
            'TEST_CASE_200',
            'INBOUND'
        );

        /**
         * @var GetItemEligibilityPreviewResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetItemEligibilityPreviewResponse::class, $response);
        $this->assertInstanceOf(ItemEligibilityPreview::class, $eligibilityPreview = $response->getPayload());
        $this->assertNotEmpty($eligibilityPreview->getAsin());
    }
}
