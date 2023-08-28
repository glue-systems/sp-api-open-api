<?php

namespace Tests\Clients\NotificationsV1\Api;

use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Model\GetSubscriptionResponse;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Model\Subscription;
use Tests\TestCase;

class NotificationsApiTest extends TestCase
{
    public function test_getSubscription()
    {
        $result = $this->sp_api()->notificationsV1(function (NotificationsApi $notificationsApi) {
            return $notificationsApi->getSubscriptionWithHttpInfo('LISTINGS_ITEM_ISSUES_CHANGE');
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
