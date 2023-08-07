<?php

namespace Tests\Clients\FeedsV20200904\Api;

use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Model\Feed;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Model\GetFeedsResponse;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactory;
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
        $feedsApi  = $this->clientFactory->createFeedsV20200904ApiClient();

        $result = $feedsApi->getFeedsWithHttpInfo(
            // Specific values come from the sandbox spec in models/feeds_2020-09-04.json
            ['POST_PRODUCT_DATA'],
            [$this->clientFactory->getSpApiConfig()->marketplaceId],
            10,
            ['CANCELLED', 'DONE']
        );

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
