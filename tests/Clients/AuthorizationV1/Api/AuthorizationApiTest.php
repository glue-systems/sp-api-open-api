<?php

namespace Tests\Clients\AuthorizationV1\Api;

use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\ApiException;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Model\GetAuthorizationCodeResponse;
use Glue\SpApi\OpenAPI\Container\SpApi;
use GuzzleHttp\Psr7\Stream;
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

    public function test_cancelServiceJobByServiceJobId()
    {
        $serviceApi = $this->spApi->authorizationV1();

        try {
            $result = $serviceApi->getAuthorizationCodeWithHttpInfo(
                'foo',
                'foo',
                'foo'
            );
        } catch (ApiException $ex) {
            $body = $ex->getResponseBody();
            if ($body instanceof Stream) {
                $contents = $body->getContents();
            }
            if ($ex->getCode() === 403) {
                $this->markTestSkipped('Unauthorized, possibly due to Developer Account settings on Seller Central.');
            }
            throw $ex;
        }

        /**
         * @var GetAuthorizationCodeResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetAuthorizationCodeResponse::class, $response);
    }
}
