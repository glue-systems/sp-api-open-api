<?php

namespace Tests\Clients\FeedsV20200904\Api;

use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Model\Feed;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Model\GetFeedsResponse;
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
            return $this->sp_api()->feedsV20200904()->getFeedsWithHttpInfo(
                // Specific values come from the sandbox spec in models/feeds_2020-09-04.json
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
        $this->assertNotEmpty($payload = $response->getPayload());
        $this->assertInstanceOf(Feed::class, $feed = $payload[0]);
        $this->assertNotEmpty($feed->getFeedId());
    }
}
