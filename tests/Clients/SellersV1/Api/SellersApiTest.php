<?php

namespace Tests\Clients\SellersV1\Api;

use Glue\SpApi\OpenAPI\Clients\SellersV1\Model\GetMarketplaceParticipationsResponse;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Model\MarketplaceParticipation;
use Tests\TestCase;

class SellersApiTest extends TestCase
{
    public function test_getMarketplaceParticipations()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->sellersV1()->getMarketplaceParticipationsWithHttpInfo();
        });

        /**
         * @var GetMarketplaceParticipationsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetMarketplaceParticipationsResponse::class, $response);
        $this->assertNotEmpty($marketplaceParticipations = $response->getPayload());
        $this->assertInstanceOf(MarketplaceParticipation::class, $marketplaceParticipations[0]);
    }
}
