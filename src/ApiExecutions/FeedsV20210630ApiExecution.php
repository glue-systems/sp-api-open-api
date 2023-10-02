<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Feeds API v2021-06-30. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2021-06-30-reference
 */
class FeedsV20210630ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getFeeds'           => FeedsApi::class,
            'createFeed'         => FeedsApi::class,
            'getFeed'            => FeedsApi::class,
            'cancelFeed'         => FeedsApi::class,
            'createFeedDocument' => FeedsApi::class,
            'getFeedDocument'    => FeedsApi::class,
        ];
    }
}
