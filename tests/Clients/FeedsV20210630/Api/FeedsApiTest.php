<?php

namespace Tests\Clients\FeedsV20210630\Api;

use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Model\Feed;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Model\GetFeedsResponse;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class FeedsApiTest extends TestCase
{
    /**
     * @var ClientFactory
     */
    public $clientFactory;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->clientFactory = $this->buildClientFactory();
    }

    public function test_getFeeds()
    {
        $feedsApi  = $this->clientFactory->createFeedsV20210630ApiClient();

        $result = $feedsApi->getFeedsWithHttpInfo(
            // Specific values come from the sandbox spec in models/feeds_2021-06-30.json
            ['POST_PRODUCT_DATA'],
            [$this->clientFactory->getSPAPIConfig()->marketplaceId],
            10,
            ['CANCELLED', 'DONE']
        );

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
