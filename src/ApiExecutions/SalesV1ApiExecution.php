<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Sales API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/sales-api-v1-reference
 */
class SalesV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getOrderMetrics' => SalesApi::class,
        ];
    }
}
