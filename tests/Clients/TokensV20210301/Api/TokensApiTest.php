<?php

namespace Tests\Clients\TokensV20210301\Api;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenResponse;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\RestrictedResource;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class TokensApiTest extends TestCase
{
    /**
     * @var ClientFactory
     */
    public $clientFactory;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->clientFactory = $this->buildClientFactory();
    }

    public function test_createRestrictedDataToken()
    {
        $tokensApi  = $this->clientFactory->createTokensV20210301ApiClient();

        $result = $tokensApi->createRestrictedDataTokenWithHttpInfo(
            new CreateRestrictedDataTokenRequest([
                // Using these specific strings as a quirky requirement of the sandbox API (see models/tokens_2021-03-01.json)
                'target_application' => 'amzn1.sellerapps.app.target-application',
                'restricted_resources' => [
                    new RestrictedResource([
                        'method' => 'GET',
                        'path' => '/orders/v0/orders/{orderId}/address',
                    ]),
                ],
            ])
        );

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
