<?php

namespace Tests\Traits;

use Glue\SpApi\OpenAPI\Traits\UnpacksHttpResponseAsString;
use Mockery;
use Mockery\MockInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use stdClass;
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

        $actualUnpacked = $sut->unpackHttpResponseAsString(null);

        $this->assertEquals('', $actualUnpacked);
    }

    public function test_unpackHttpResponseAsString_can_handle_empty_string_response()
    {
        $sut = $this;

        $actualUnpacked = $sut->unpackHttpResponseAsString('');

        $this->assertEquals('', $actualUnpacked);
    }

    public function test_unpackHttpResponseAsString_can_handle_string_response()
    {
        $sut = $this;

        $actualUnpacked = $sut->unpackHttpResponseAsString('fake response arg');

        $this->assertEquals('fake response arg', $actualUnpacked);
    }

    public function test_unpackHttpResponseAsString_can_handle_stream_response()
    {
        $expectedUnpacked = '{ "fake": "stream response body" }';
        $this->stream->shouldReceive('__toString')
            ->once()
            ->andReturn($expectedUnpacked);

        $sut = $this;

        $actualUnpacked = $sut->unpackHttpResponseAsString($this->stream);

        $this->assertEquals($expectedUnpacked, $actualUnpacked);
    }

    public function test_unpackHttpResponseAsString_can_handle_generic_response()
    {
        $expectedUnpacked = '{ "fake": "generic response" }';
        $this->response->shouldReceive('getBody')
            ->once()
            ->andReturn($this->stream);
        $this->stream->shouldReceive('getContents')
            ->once()
            ->andReturn($expectedUnpacked);

        $sut = $this;

        $actualUnpacked = $sut->unpackHttpResponseAsString($this->response);

        $this->assertEquals($expectedUnpacked, $actualUnpacked);
    }

    public function test_unpackHttpResponseAsString_can_handle_json_serializable_object_response()
    {
        $responseArg      = new stdClass();
        $responseArg->foo = 'bar';

        $expectedUnpacked = '{"foo":"bar"}';

        $sut = $this;

        $actualUnpacked = $sut->unpackHttpResponseAsString($responseArg);

        $this->assertEquals($expectedUnpacked, $actualUnpacked);
    }

    public function test_unpackHttpResponseAsString_returns_empty_string_for_non_json_serializable_value_responses()
    {
        // Closed resources should return false when passed into json_encode.
        $responseArg = fopen("{$this->getOutputDirectoryPath()}/temp.txt", "w");
        fclose($responseArg);

        $expectedUnpacked = '';

        $sut = $this;

        $actualUnpacked = $sut->unpackHttpResponseAsString($responseArg);

        $this->assertEquals($expectedUnpacked, $actualUnpacked);
    }
}
