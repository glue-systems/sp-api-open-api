<?php

namespace Tests\Clients\FeedsV20210630\Api;

use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Model\Feed;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Model\GetFeedsResponse;
use Tests\TestCase;

class FeedsApiTest extends TestCase
{
    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
    }

    public function test_getFeeds()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->feedsV20210630()->getFeedsWithHttpInfo(
                // Specific values come from the sandbox spec in models/feeds_2021-06-30.json
                ['POST_PRODUCT_DATA'],
                [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId],
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
        $this->assertNotEmpty($feeds = $response->getFeeds());
        $this->assertInstanceOf(Feed::class, $feed = $feeds[0]);
        $this->assertNotEmpty($feed->getFeedId());
    }
}
