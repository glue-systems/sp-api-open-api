<?php

namespace Tests\Clients\AuthorizationV1\Api;

use Glue\SpApi\OpenAPI\ApiExecutions\AuthorizationV1ApiExecution;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse;
use Tests\TestCase;

class AuthorizationApiTest extends TestCase
{
    public function test_getAuthorizationCode()
    {
        $response = $this->tryButSkipIfUnauthorized(function () {
            return (new AuthorizationV1ApiExecution(...$this->getSpApiExecutionDependencies()))
                ->getAuthorizationCode('foo', 'foo', 'foo');
        });

        $this->assertInstanceOf(GetAuthorizationCodeResponse::class, $response);
    }
}
