<?php

namespace Tests\Clients\FulfillmentInboundV0\Api;

use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\ASINInboundGuidance;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\GetInboundGuidanceResponse;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\GetInboundGuidanceResult;
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
        $fbaInboundApi = $this->spApi->fulfillmentInboundV0();

        $result = $fbaInboundApi->getInboundGuidanceWithHttpInfo(
            'MarketplaceId',
            ['sku1', 'sku2']
        );

        /**
         * @var GetInboundGuidanceResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetInboundGuidanceResponse::class, $response);
        $this->assertInstanceOf(GetInboundGuidanceResult::class, $inboundGuidanceResult = $response->getPayload());
        $this->assertNotEmpty($asinInboundGuidanceList = $inboundGuidanceResult->getASINInboundGuidanceList());
        $this->assertInstanceOf(ASINInboundGuidance::class, $asinInboundGuidance = $asinInboundGuidanceList[0]);
        $this->assertNotEmpty($asinInboundGuidance->getASIN());
    }
}
