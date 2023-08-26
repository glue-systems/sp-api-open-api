<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\ApiException;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenResponse;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryInterface;
use Glue\SpApi\OpenAPI\Services\Rdt\RdtService;
use Mockery\MockInterface;
use Tests\TestCase;

class RdtServiceTest extends TestCase
{
    /**
     * @var ClientFactoryInterface|MockInterface
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
        $this->clientFactory = \Mockery::mock(ClientFactoryInterface::class);
        $this->tokensApi     = \Mockery::mock(TokensApi::class);
    }

    public function test_makeRdtProviderFromRequest_happy_case()
    {
        $expectedRestrictedDataToken = 'fake-rdt-123';
        $rdtRequest                  = new CreateRestrictedDataTokenRequest();
        $rdtResponse                 = new CreateRestrictedDataTokenResponse([
            'restrictedDataToken' => $expectedRestrictedDataToken,
        ]);

        $this->clientFactory->shouldReceive('createTokensV20210301ApiClient')
            ->once()
            ->withNoArgs()
            ->andReturn($this->tokensApi);
        $this->tokensApi->shouldReceive('createRestrictedDataToken')
            ->once()
            ->with($rdtRequest)
            ->andReturn($rdtResponse);

        $sut         = new RdtService($this->clientFactory);
        $rdtProvider = $sut->makeRdtProviderFromRequest($rdtRequest);
        $actualRestrictedDataToken = $rdtProvider();

        $this->assertEquals($expectedRestrictedDataToken, $actualRestrictedDataToken);
    }

    public function test_makeRdtProviderFromRequest_throws_RestrictedDataTokenException()
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

        $sut         = new RdtService($this->clientFactory);
        $rdtProvider = $sut->makeRdtProviderFromRequest(new CreateRestrictedDataTokenRequest());

        $this->expectException(RestrictedDataTokenException::class);
        $this->expectExceptionMessage($expectedExceptionMessage);
        $rdtProvider();
    }
}
