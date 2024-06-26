<?php

namespace Tests\Clients\FulfillmentInboundV0\Api;

use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\ASINInboundGuidance;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\GetInboundGuidanceResponse;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Model\GetInboundGuidanceResult;
use Tests\TestCase;

class FbaInboundApiTest extends TestCase
{
    public function test_getInboundGuidance()
    {
        $result = $this->tryButSkipIfUnauthorized(
            function () {
                return $this->sp_api()
                    ->fulfillmentInboundV0()
                    ->execute(function (FbaInboundApi $fbaInboundApi) {
                        return $fbaInboundApi->getInboundGuidanceWithHttpInfo(
                            'MarketplaceId',
                            ['sku1', 'sku2']
                        );
                    });
            }
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
