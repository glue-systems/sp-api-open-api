<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the FBA Inventory API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/fbainventory-api-v1-reference
 */
class FbaInventoryV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getInventorySummaries' => FbaInventoryApi::class,
        ];
    }
}
