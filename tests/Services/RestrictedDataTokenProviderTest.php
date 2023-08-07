<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\ApiException;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenResponse;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenRequestException;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryContract;
use Glue\SpApi\OpenAPI\Services\Rdt\RestrictedDataTokenProvider;
use Mockery\MockInterface;
use Tests\TestCase;

class RestrictedDataTokenProviderTest extends TestCase
{
    /**
     * @var ClientFactoryContract|MockInterface
     */
    public $clientFactory;

    /**
     * @var TokensApi|MockInterface
     */
    public $tokensApi;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->clientFactory = \Mockery::mock(ClientFactoryContract::class);
        $this->tokensApi     = \Mockery::mock(TokensApi::class);
    }

    public function test_fromRdtRequest_happy_case()
    {
        $expectedRestrictedDataToken = 'fake-rdt-123';
        $rdtRequest                  = new CreateRestrictedDataTokenRequest();
        $rdtResponse                 = new CreateRestrictedDataTokenResponse([
            'restricted_data_token' => $expectedRestrictedDataToken,
        ]);

        $this->clientFactory->shouldReceive('createTokensV20210301ApiClient')
            ->once()
            ->withNoArgs()
            ->andReturn($this->tokensApi);
        $this->tokensApi->shouldReceive('createRestrictedDataToken')
            ->once()
            ->with($rdtRequest)
            ->andReturn($rdtResponse);

        $sut         = new RestrictedDataTokenProvider($this->clientFactory);
        $rdtProvider = $sut->fromRdtRequest($rdtRequest);
        $actualRestrictedDataToken = $rdtProvider();

        $this->assertEquals($expectedRestrictedDataToken, $actualRestrictedDataToken);
    }

    public function test_fromRdtRequest_throws_RestrictedDataTokenRequestException()
    {
        $expectedExceptionMessage = 'fake exception';

        $this->clientFactory->shouldReceive('createTokensV20210301ApiClient')
            ->once()
            ->withNoArgs()
            ->andReturn($this->tokensApi);
        $this->tokensApi->shouldReceive('createRestrictedDataToken')
            ->once()
            ->withAnyArgs()
            ->andThrow(ApiException::class, $expectedExceptionMessage);

        $sut         = new RestrictedDataTokenProvider($this->clientFactory);
        $rdtProvider = $sut->fromRdtRequest(new CreateRestrictedDataTokenRequest());

        $this->setExpectedException(RestrictedDataTokenRequestException::class, $expectedExceptionMessage);
        $rdtProvider();
    }
}
