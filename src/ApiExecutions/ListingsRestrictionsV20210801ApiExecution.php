<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Listings Restrictions API v2021-08-01. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/listings-restrictions-api-v2021-08-01-reference
 */
class ListingsRestrictionsV20210801ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getListingsRestrictions' => ListingsApi::class,
        ];
    }
}
