<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Supply Sources API v2020-07-01.
 */
class SupplySourcesV20200701ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'archiveSupplySource'      => SupplySourcesApi::class,
            'createSupplySource'       => SupplySourcesApi::class,
            'getSupplySource'          => SupplySourcesApi::class,
            'updateSupplySource'       => SupplySourcesApi::class,
            'updateSupplySourceStatus' => SupplySourcesApi::class,
        ];
    }
}
