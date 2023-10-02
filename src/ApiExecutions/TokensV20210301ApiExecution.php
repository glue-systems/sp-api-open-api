<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Tokens API v2021-03-01. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/tokens-api-v2021-03-01-reference
 */
class TokensV20210301ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'createRestrictedDataToken' => TokensApi::class,
        ];
    }
}
