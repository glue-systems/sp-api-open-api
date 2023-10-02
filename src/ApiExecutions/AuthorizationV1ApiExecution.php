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

    /**
     * Operation getAuthorizationCode
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param  string $sellingPartnerId The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param  string $developerId Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param  string $mwsAuthToken The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse|\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse|\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse|\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse|\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse|\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse|\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse|\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse|\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse
     */
    public function getAuthorizationCode($sellingPartnerId, $developerId, $mwsAuthToken)
    {
        return $this->_executeOperation(
            'getAuthorizationCode',
            $sellingPartnerId,
            $developerId,
            $mwsAuthToken
        );
    }
}
