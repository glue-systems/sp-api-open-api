<?php

namespace Tests\Middleware\Guzzle;

use Glue\SpApi\OpenAPI\Middleware\Guzzle\SpApiAccessTokenMiddleware;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Mockery;
use Mockery\MockInterface;
use Psr\Http\Message\RequestInterface;
use Tests\TestCase;

class SpApiAccessTokenMiddlewareTest extends TestCase
{
    /**
     * @var RequestInterface|MockInterface
     */
    public $request;

    /**
     * @var LwaServiceInterface|MockInterface
     */
    public $lwaService;

    /**
     * @var SpApiAccessTokenMiddlewareTest_ExampleInvokable|MockInterface
     */
    public $next;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->request    = Mockery::mock(RequestInterface::class);
        $this->lwaService = Mockery::mock(LwaServiceInterface::class);
        $this->next       = Mockery::mock(SpApiAccessTokenMiddlewareTest_ExampleInvokable::class);
    }

    public function test_sp_api_access_token_middleware_with_rdt_provider_happy_case()
    {
        $expectedToken = 'expected-token';
        $rdtProvider = function () use ($expectedToken) {
            return $expectedToken;
        };

        $startingOptions = [];
        $sut             = new SpApiAccessTokenMiddleware(
            $this->lwaService,
            $rdtProvider
        );

        $this->request->shouldReceive('withHeader')
            ->once()
            ->with('x-amz-access-token', $expectedToken)
            ->andReturnSelf();

        $this->next->shouldReceive('__invoke')
            ->once()
            ->withArgs(function (...$args) use ($startingOptions) {
                return $args[0] == $this->request
                    && $args[1] === $startingOptions;
            });

        $middlewareInvokedReturnValue = $sut($this->next);

        $this->assertTrue(is_callable($middlewareInvokedReturnValue));

        $middlewareInvokedReturnValue($this->request, $startingOptions);
    }

    public function test_sp_api_access_token_middleware_without_rdt_provider_happy_case()
    {
        $expectedToken = 'expected-token';

        $startingOptions = [];
        $sut             = new SpApiAccessTokenMiddleware(
            $this->lwaService,
            null
        );

        $this->lwaService->shouldReceive('rememberLwaAccessToken')
            ->once()
            ->andReturn($expectedToken);

        $this->request->shouldReceive('withHeader')
            ->once()
            ->with('x-amz-access-token', $expectedToken)
            ->andReturnSelf();

        $this->next->shouldReceive('__invoke')
            ->once()
            ->withArgs(function (...$args) use ($startingOptions) {
                return $args[0] == $this->request
                    && $args[1] === $startingOptions;
            });

        $middlewareInvokedReturnValue = $sut($this->next);

        $this->assertTrue(is_callable($middlewareInvokedReturnValue));

        $middlewareInvokedReturnValue($this->request, $startingOptions);
    }
}

interface SpApiAccessTokenMiddlewareTest_ExampleInvokable
{
    public function __invoke(...$args);
}
