<?php

namespace Tests\Clients\NotificationsV1\Api;

use Glue\SpApi\OpenAPI\Clients\NotificationsV1\ApiException;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Model\GetSubscriptionResponse;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Model\Subscription;
use Glue\SpApi\OpenAPI\Container\SpApi;
use GuzzleHttp\Psr7\Stream;
use Tests\TestCase;

class NotificationsApiTest extends TestCase
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

    public function test_getSubscription()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->notificationsV1()
                ->getSubscriptionWithHttpInfo('LISTINGS_ITEM_ISSUES_CHANGE');
        });

        /**
         * @var GetSubscriptionResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetSubscriptionResponse::class, $response);
        $this->assertInstanceOf(Subscription::class, $subscription = $response->getPayload());
        $this->assertNotEmpty($subscription->getDestinationId());
    }
}
