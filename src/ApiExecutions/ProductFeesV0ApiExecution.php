<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Product Fees API v0. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/product-fees-api-v0-reference
 */
class ProductFeesV0ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getMyFeesEstimateForSKU'  => FeesApi::class,
            'getMyFeesEstimateForASIN' => FeesApi::class,
            'getMyFeesEstimates'       => FeesApi::class,
        ];
    }
}
