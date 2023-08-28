<?php

namespace Tests\Clients\FbaInboundEligibilityV1\Api;

use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Model\GetItemEligibilityPreviewResponse;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Model\ItemEligibilityPreview;
use Tests\TestCase;

class FbaInboundApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_getItemEligibilityPreview()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->fbaInboundEligibilityV1()
                ->getItemEligibilityPreviewWithHttpInfo('TEST_CASE_200', 'INBOUND');
        });

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
