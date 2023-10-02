<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Catalog Items API v0. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/catalog-items-api-v0-reference
 */
class CatalogItemsV0ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'listCatalogItems'      => CatalogApi::class,
            'getCatalogItem'        => CatalogApi::class,
            'listCatalogCategories' => CatalogApi::class,
        ];
    }
}
