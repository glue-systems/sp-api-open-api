<?php

namespace Tests\Clients\TokensV20210301\Api;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenResponse;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\RestrictedResource;
use Tests\TestCase;

class TokensApiTest extends TestCase
{
    public function test_createRestrictedDataToken()
    {
        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->tokensV20210301()->createRestrictedDataTokenWithHttpInfo(
                new CreateRestrictedDataTokenRequest([
                    // Using these specific strings as a quirky requirement of the sandbox API (see models/tokens_2021-03-01.json)
                    'targetApplication'   => 'amzn1.sellerapps.app.target-application',
                    'restrictedResources' => [
                        new RestrictedResource([
                            'method' => 'GET',
                            'path'   => '/orders/v0/orders/{orderId}/address',
                        ]),
                    ],
                ])
            );
        });

        /**
         * @var CreateRestrictedDataTokenResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(CreateRestrictedDataTokenResponse::class, $response);
        $this->assertNotEmpty($response->getRestrictedDataToken());
        $this->assertNotEmpty($response->getExpiresIn());
    }
}
