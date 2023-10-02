<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Finances API v0. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/finances-api-reference
 */
class FinancesV0ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'listFinancialEventGroups'     => DefaultApi::class,
            'listFinancialEventsByGroupId' => DefaultApi::class,
            'listFinancialEventsByOrderId' => DefaultApi::class,
            'listFinancialEvents'          => DefaultApi::class,
        ];
    }
}
