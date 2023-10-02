<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Feeds API v2020-09-04. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/feeds-api-v2020-09-04-reference
 */
class FeedsV20200904ApiExecution extends SpApiExecution
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
