<?php

namespace Tests\Services;

use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Api\TokensApi;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\ApiException;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenResponse;
use Glue\SPAPI\OpenAPI\Exceptions\RestrictedDataTokenRequestException;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactoryContract;
use Glue\SPAPI\OpenAPI\Services\RDT\RestrictedDataTokenProvider;
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
        $expectedRestrictedDataToken = 'fakeRDT123';
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

    public function test_fromRdtRequest_throws_()
    {
        $expectedExceptionMessage    = 'fake exception';
        $expectedRestrictedDataToken = 'fakeRDT123';
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
            ->withAnyArgs()
            ->andThrow(ApiException::class, $expectedExceptionMessage);

        $sut         = new RestrictedDataTokenProvider($this->clientFactory);
        $rdtProvider = $sut->fromRdtRequest($rdtRequest);

        $this->setExpectedException(RestrictedDataTokenRequestException::class, $expectedExceptionMessage);
        $rdtProvider();
    }
}
