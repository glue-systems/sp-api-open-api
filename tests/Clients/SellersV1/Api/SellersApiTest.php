<?php

namespace Tests\Clients\SellersV1\Api;

use Glue\SpApi\OpenAPI\Clients\SellersV1\ApiException;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Model\GetMarketplaceParticipationsResponse;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Model\MarketplaceParticipation;
use Glue\SpApi\OpenAPI\Container\SpApi;
use GuzzleHttp\Psr7\Stream;
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
        $sellersApi = $this->spApi->sellersV1();

        try {
            $result = $sellersApi->getMarketplaceParticipationsWithHttpInfo();
        } catch (ApiException $ex) {
            $body = $ex->getResponseBody();
            if ($body instanceof Stream) {
                $contents = $body->getContents();
            }
            if ($ex->getCode() !== 400) {
                throw $ex;
            }
            $this->markTestSkipped('Sandbox not yet available for A+ Content Management API v2020-11-01.');
        }

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
