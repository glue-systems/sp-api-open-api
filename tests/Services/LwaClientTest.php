<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaClient;
use Glue\SpApi\OpenAPI\SpApiConfig;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\RequestOptions;
use Mockery\MockInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Tests\TestCase;

class LwaClientTest extends TestCase
{
    /**
     * @var SpApiConfig
     */
    public $spApiConfig;

    /**
     * @var ClientInterface|MockInterface
     */
    public $guzzleClient;

    /**
     * @var RequestInterface|MockInterface
     */
    public $request;

    /**
     * @var ResponseInterface|MockInterface
     */
    public $response;

    /**
     * @var StreamInterface|MockInterface
     */
    public $stream;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->spApiConfig  = $this->buildSpApiConfig();
        $this->guzzleClient = \Mockery::mock(ClientInterface::class);
        $this->request      = \Mockery::mock(RequestInterface::class);
        $this->response     = \Mockery::mock(ResponseInterface::class);
        $this->stream       = \Mockery::mock(StreamInterface::class);
    }

    public function test_requestNewLwaAccessToken_happy_case()
    {
        $expectedParsedResponse = ['foo' => 'bar'];

        $this->guzzleClient->shouldReceive('request')
            ->once()
            ->with('POST', '/auth/o2/token', [
                'base_uri'            => $this->spApiConfig->lwaOAuthBaseUrl,
                RequestOptions::DEBUG => $this->spApiConfig->oAuthApiCallDebug,
                RequestOptions::JSON  => [
                    'grant_type'    => 'refresh_token',
                    'refresh_token' => $this->spApiConfig->lwaRefreshToken,
                    'client_id'     => $this->spApiConfig->lwaClientId,
                    'client_secret' => $this->spApiConfig->lwaClientSecret,
                ],
            ])
            ->andReturn($this->response);
        $this->response->shouldReceive('getBody')
            ->once()
            ->andReturn($this->stream);
        $this->stream->shouldReceive('getContents')
            ->once()
            ->andReturn(json_encode($expectedParsedResponse));

        $sut                  = new LwaClient($this->spApiConfig);
        $actualParsedResponse = $sut->requestNewLwaAccessToken($this->guzzleClient);

        $this->assertEquals($actualParsedResponse, $expectedParsedResponse);
    }

    public function test_requestNewLwaAccessToken_throws_LwaAccessTokenException()
    {
        $expectedExceptionMessage = 'fake exception';

        $this->guzzleClient->shouldReceive('request')
            ->once()
            ->withAnyArgs()
            ->andThrow(new RequestException($expectedExceptionMessage, $this->request));

        $sut = new LwaClient($this->spApiConfig);

        $this->expectException(LwaAccessTokenException::class);
        $this->expectExceptionMessage($expectedExceptionMessage);
        $sut->requestNewLwaAccessToken($this->guzzleClient);
    }
}
