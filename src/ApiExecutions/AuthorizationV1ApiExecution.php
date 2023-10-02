<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Authorization API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/authorization-api-v1-reference
 */
class AuthorizationV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getAuthorizationCode' => AuthorizationApi::class,
        ];
    }
}
