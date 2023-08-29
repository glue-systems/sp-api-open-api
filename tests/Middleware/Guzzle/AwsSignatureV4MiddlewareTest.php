<?php

namespace Tests\Middleware\Guzzle;

use Aws\Credentials\CredentialsInterface;
use Aws\Signature\SignatureV4;
use Glue\SpApi\OpenAPI\Middleware\Guzzle\AwsSignatureV4Middleware;
use GuzzleHttp\Promise;
use Mockery;
use Mockery\MockInterface;
use Psr\Http\Message\RequestInterface;
use Tests\TestCase;

class AwsSignatureV4MiddlewareTest extends TestCase
{
    /**
     * @var RequestInterface|MockInterface
     */
    public $startingRequest;

    /**
     * @var CredentialsInterface|MockInterface
     */
    public $credentials;

    /**
     * @var SignatureV4|MockInterface
     */
    public $signer;

    /**
     * @var callable
     */
    public $awsCredentialProvider;

    /**
     * @var SignatureV4Test_ExampleInvokable|MockInterface
     */
    public $next;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->startingRequest       = Mockery::mock(RequestInterface::class);
        $this->credentials           = Mockery::mock(CredentialsInterface::class);
        $this->signer                = Mockery::mock(SignatureV4::class);
        $this->awsCredentialProvider = function () {
            return Promise\Create::promiseFor($this->credentials);
        };
        $this->next                 = Mockery::mock(SignatureV4Test_ExampleInvokable::class);
    }

    public function test_aws_signature_v4_middleware_happy_case()
    {
        $startingOptions = [];
        $sut             = new AwsSignatureV4Middleware(
            $this->awsCredentialProvider,
            $this->signer
        );

        $expectedEnhancedRequest = Mockery::mock(RequestInterface::class);

        $this->signer->shouldReceive('signRequest')
            ->once()
            ->withArgs(function (...$args) {
                return $args[0] == $this->startingRequest
                    && $args[1] == $this->credentials;
            })
            ->andReturn($expectedEnhancedRequest);

        $this->next->shouldReceive('__invoke')
            ->once()
            ->withArgs(function (...$args) use ($expectedEnhancedRequest, $startingOptions) {
                return $args[0] == $expectedEnhancedRequest
                    && $args[1] === $startingOptions;
            });

        $middlewareInvokedReturnValue = $sut($this->next);

        $this->assertTrue(is_callable($middlewareInvokedReturnValue));

        $middlewareInvokedReturnValue($this->startingRequest, $startingOptions);
    }
}

interface SignatureV4Test_ExampleInvokable
{
    public function __invoke(...$args);
}
