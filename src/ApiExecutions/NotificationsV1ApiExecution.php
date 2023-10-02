<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Notifications API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/notifications-api-v1-reference
 */
class NotificationsV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getSubscription'        => NotificationsApi::class,
            'createSubscription'     => NotificationsApi::class,
            'getSubscriptionById'    => NotificationsApi::class,
            'deleteSubscriptionById' => NotificationsApi::class,
            'getDestinations'        => NotificationsApi::class,
            'createDestination'      => NotificationsApi::class,
            'getDestination'         => NotificationsApi::class,
            'deleteDestination'      => NotificationsApi::class,
        ];
    }
}
