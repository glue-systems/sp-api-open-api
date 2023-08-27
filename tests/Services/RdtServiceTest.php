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
use Psr\Http\Message\StreamInterface;
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

    /**
     * @var StreamInterface|MockInterface
     */
    public $stream;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->clientFactory = \Mockery::mock(ClientFactoryInterface::class);
        $this->tokensApi     = \Mockery::mock(TokensApi::class);
        $this->stream        = \Mockery::mock(StreamInterface::class);
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

    public function test_makeRdtProviderFromRequest_throws_RestrictedDataTokenException_having_no_response_body()
    {
        $expectedExceptionMessage = 'fake exception';

        $this->clientFactory->shouldReceive('createTokensV20210301ApiClient')
            ->once()
            ->withNoArgs()
            ->andReturn($this->tokensApi);
        $this->tokensApi->shouldReceive('createRestrictedDataToken')
            ->once()
            ->withAnyArgs()
            ->andThrow(new ApiException($expectedExceptionMessage, 400, [], null));

        $sut         = new RdtService($this->clientFactory);
        $rdtProvider = $sut->makeRdtProviderFromRequest(new CreateRestrictedDataTokenRequest());

        $this->expectException(RestrictedDataTokenException::class);
        $this->expectExceptionMessage($expectedExceptionMessage);
        $rdtProvider();
    }

    public function test_makeRdtProviderFromRequest_throws_RestrictedDataTokenException_having_string_response_body()
    {
        $expectedExceptionMessage = 'fake exception';
        $expectedResponseBody     = 'fake response body';

        $this->clientFactory->shouldReceive('createTokensV20210301ApiClient')
            ->once()
            ->withNoArgs()
            ->andReturn($this->tokensApi);
        $this->tokensApi->shouldReceive('createRestrictedDataToken')
            ->once()
            ->withAnyArgs()
            ->andThrow(new ApiException($expectedExceptionMessage, 400, [], $expectedResponseBody));

        $sut         = new RdtService($this->clientFactory);
        $rdtProvider = $sut->makeRdtProviderFromRequest(new CreateRestrictedDataTokenRequest());

        $this->expectException(RestrictedDataTokenException::class);
        $this->expectExceptionMessage("RESPONSE BODY: $expectedResponseBody");
        $rdtProvider();
    }

    public function test_makeRdtProviderFromRequest_throws_RestrictedDataTokenException_unpacking_stream_response_body()
    {
        $expectedExceptionMessage = 'fake exception';
        $expectedResponseBody     = '{ "fake": "stream response body" }';
        $this->stream->shouldReceive('getContents')
            ->once()
            ->andReturn($expectedResponseBody);

        $this->clientFactory->shouldReceive('createTokensV20210301ApiClient')
            ->once()
            ->withNoArgs()
            ->andReturn($this->tokensApi);
        $this->tokensApi->shouldReceive('createRestrictedDataToken')
            ->once()
            ->withAnyArgs()
            ->andThrow(new ApiException($expectedExceptionMessage, 400, [], $this->stream));

        $sut         = new RdtService($this->clientFactory);
        $rdtProvider = $sut->makeRdtProviderFromRequest(new CreateRestrictedDataTokenRequest());

        $this->expectException(RestrictedDataTokenException::class);
        $this->expectExceptionMessage("RESPONSE BODY: $expectedResponseBody");
        $rdtProvider();
    }
}
