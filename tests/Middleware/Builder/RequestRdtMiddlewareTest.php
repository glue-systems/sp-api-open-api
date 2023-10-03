<?php

namespace Tests\Middleware\Builder;

use Glue\SpApi\OpenAPI\Builder\ClientBuilder;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Middleware\Builder\RequestRdtMiddleware;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\Services\Rdt\RdtServiceInterface;
use Mockery;
use Mockery\MockInterface;
use Tests\TestCase;

class RequestRdtMiddlewareTest extends TestCase
{
    /**
     * @var RdtServiceInterface|MockInterface
     */
    public $rdtService;

    /**
     * @var RequestRdtTest_ExampleInvokable|MockInterface
     */
    public $next;

    /**
     * @var CreateRestrictedDataTokenRequest
     */
    public $rdtRequest;

    /**
     * @var ClientBuilder
     */
    public $startingBuilder;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->rdtService      = Mockery::mock(RdtServiceInterface::class);
        $this->next            = Mockery::mock(RequestRdtTest_ExampleInvokable::class);
        $this->rdtRequest      = new CreateRestrictedDataTokenRequest(['targetApplication' => 'fake-app']);
        $this->startingBuilder = new ClientBuilder(
            Mockery::mock(LwaServiceInterface::class),
            function () {
                return 'foo';
            },
            $this->buildSpApiConfig()
        );
    }

    public function test_request_rdt_middleware_happy_case()
    {
        $sut = new RequestRdtMiddleware(
            $this->rdtService,
            $this->rdtRequest
        );

        $expectedRdtProvider     = function () {
            return 'fake-rdt';
        };
        $expectedEnhancedBuilder = clone $this->startingBuilder;
        $expectedEnhancedBuilder->withRdtProvider($expectedRdtProvider);

        $this->rdtService->shouldReceive('makeRdtProviderFromRequest')
            ->once()
            ->with($this->rdtRequest)
            ->andReturn($expectedRdtProvider);

        $this->next->shouldReceive('__invoke')
            ->once()
            ->withArgs(function (...$args) use ($expectedEnhancedBuilder) {
                return $args[0] == $expectedEnhancedBuilder;
            });

        $middlewareInvokedReturnValue = $sut($this->next);

        $this->assertTrue(is_callable($middlewareInvokedReturnValue));

        $middlewareInvokedReturnValue($this->startingBuilder);
    }
}

interface RequestRdtTest_ExampleInvokable
{
    public function __invoke(...$args);
}
