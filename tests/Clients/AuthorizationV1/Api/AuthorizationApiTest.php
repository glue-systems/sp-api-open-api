<?php

namespace Tests\Clients\AuthorizationV1\Api;

use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class AuthorizationApiTest extends TestCase
{
    /**
     * @var SpApi
     */
    public $spApi;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->spApi = $this->buildSpApiContainer();
    }

    public function test_getAuthorizationCode()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->spApi->execute(function () {
                return $this->spApi->authorizationV1()
                    ->getAuthorizationCodeWithHttpInfo('foo', 'foo', 'foo');
            });
        });

        /**
         * @var GetAuthorizationCodeResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetAuthorizationCodeResponse::class, $response);
    }
}
