<?php

namespace Tests\Traits;

use Glue\SpApi\OpenAPI\Traits\UnpacksHttpResponseAsString;
use Mockery;
use Mockery\MockInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Tests\TestCase;

class UnpacksHttpResponseAsStringTest extends TestCase
{
    use UnpacksHttpResponseAsString;

    /**
     * @var StreamInterface|MockInterface
     */
    public $stream;

    /**
     * @var ResponseInterface|MockInterface
     */
    public $response;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->stream        = Mockery::mock(StreamInterface::class);
        $this->response      = Mockery::mock(ResponseInterface::class);
    }

    public function test_unpackHttpResponseAsString_can_handle_null_response()
    {
        $sut = $this;

        $actual = $sut->unpackHttpResponseAsString(null);

        $this->assertEquals('', $actual);
    }

    public function test_unpackHttpResponseAsString_can_handle_empty_string_response()
    {
        $sut = $this;

        $actual = $sut->unpackHttpResponseAsString('');

        $this->assertEquals('', $actual);
    }

    public function test_unpackHttpResponseAsString_can_handle_string_response()
    {
        $sut = $this;

        $actual = $sut->unpackHttpResponseAsString('fake response arg');

        $this->assertEquals('fake response arg', $actual);
    }

    public function test_unpackHttpResponseAsString_can_handle_stream_response()
    {
        $expected = '{ "fake": "stream response body" }';
        $this->stream->shouldReceive('__toString')
            ->once()
            ->andReturn($expected);

        $sut = $this;

        $actual = $sut->unpackHttpResponseAsString($this->stream);

        $this->assertEquals($expected, $actual);
    }

    public function test_unpackHttpResponseAsString_can_handle_generic_response()
    {
        $expected = '{ "fake": "generic response" }';
        $this->response->shouldReceive('getBody')
            ->once()
            ->andReturn($this->stream);
        $this->stream->shouldReceive('getContents')
            ->once()
            ->andReturn($expected);

        $sut = $this;

        $actual = $sut->unpackHttpResponseAsString($this->response);

        $this->assertEquals($expected, $actual);
    }
}
