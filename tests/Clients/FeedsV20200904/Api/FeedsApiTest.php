<?php

namespace Tests\Clients\FeedsV20200904\Api;

use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Model\Feed;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Model\GetFeedsResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class FeedsApiTest extends TestCase
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

    public function test_getFeeds()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->feedsV20200904()->getFeedsWithHttpInfo(
                // Specific values come from the sandbox spec in models/feeds_2020-09-04.json
                ['POST_PRODUCT_DATA'],
                [$this->spApi->getSpApiConfig()->defaultMarketplaceId],
                10,
                ['CANCELLED', 'DONE']
            );
        });

        /**
         * @var GetFeedsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetFeedsResponse::class, $response);
        $this->assertNotEmpty($payload = $response->getPayload());
        $this->assertInstanceOf(Feed::class, $feed = $payload[0]);
        $this->assertNotEmpty($feed->getFeedId());
    }
}
