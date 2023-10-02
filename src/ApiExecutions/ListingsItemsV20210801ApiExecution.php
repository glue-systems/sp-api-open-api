<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Listings Items API v2021-08-01. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/listings-items-api-v2021-08-01-reference
 */
class ListingsItemsV20210801ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getListingsItem'    => ListingsApi::class,
            'putListingsItem'    => ListingsApi::class,
            'deleteListingsItem' => ListingsApi::class,
            'patchListingsItem'  => ListingsApi::class,
        ];
    }
}
