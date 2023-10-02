<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Catalog Items API v2020-12-01. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v2020-12-01-reference
 */
class CatalogItemsV20201201ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'searchCatalogItems' => CatalogApi::class,
            'getCatalogItem'     => CatalogApi::class,
        ];
    }
}
