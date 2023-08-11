<?php

namespace Tests\Clients\SellersV1\Api;

use Glue\SpApi\OpenAPI\Clients\SellersV1\Model\GetMarketplaceParticipationsResponse;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Model\MarketplaceParticipation;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class SellersApiTest extends TestCase
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

    public function test_getMarketplaceParticipations()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->sellersV1()->getMarketplaceParticipationsWithHttpInfo();
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
