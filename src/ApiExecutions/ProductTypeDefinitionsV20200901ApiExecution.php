<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Product Type Definitions API v2020-09-01. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/product-type-definitions-api-v2020-09-01-reference
 */
class ProductTypeDefinitionsV20200901ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'searchDefinitionsProductTypes' => DefinitionsApi::class,
            'getDefinitionsProductType'     => DefinitionsApi::class,
        ];
    }
}
