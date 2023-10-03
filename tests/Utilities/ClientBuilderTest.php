<?php

namespace Tests\Builder;

use Aws\Credentials\CredentialsInterface;
use Aws\Signature\SignatureV4;
use Glue\SpApi\OpenAPI\Builder\ClientBuilder;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\ClientBuilderException;
use Glue\SpApi\OpenAPI\Middleware\Guzzle\AwsSignatureV4Middleware;
use Glue\SpApi\OpenAPI\Middleware\Guzzle\SpApiAccessTokenMiddleware;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Mockery;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientBuilderTest extends TestCase
{
    /**
     * @var LwaServiceInterface|MockInterface
     */
    public $lwaService;

    /**
     * @var callable
     */
    public $awsCredentialProvider;

    /**
     * @var HandlerStack|MockInterface
     */
    public $guzzleHandlerStack;

    /**
     * @var SpApiConfig
     */
    public $spApiConfig;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->lwaService         = Mockery::mock(LwaServiceInterface::class);
        $this->awsCredentialProvider         = function () {
            return Mockery::mock(CredentialsInterface::class);
        };
        $this->guzzleHandlerStack = Mockery::mock(HandlerStack::class);
        $this->spApiConfig        = $this->buildSpApiConfig();
    }

    public function test_forClient_happy_case()
    {
        $expectedClientClassFqn = OrdersV0Api::class;
        $expectedDomainConfig   = $this->_buildExpectedStandardOrdersV0Config($this->spApiConfig);

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient($expectedClientClassFqn);

        $this->assertEquals($expectedClientClassFqn, $sut->getClientClassFqn());
        $this->assertEquals($expectedDomainConfig, $sut->getDomainConfig());
    }

    public function test_forClient_throws_ClientBuilderException_on_invalid_fqn()
    {
        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('Invalid API class FQN');
        $sut->forClient('\Invalid\Api\Class');
    }

    public function test_forClient_throws_ClientBuilderException_on_2nd_call()
    {
        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient(OrdersV0Api::class);

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('cannot be called more than once');
        $sut->forClient(OrdersV0Api::class);
    }

    public function test_withConfig_happy_case_with_changes_made_via_callback()
    {
        $newDebugValue        = !$this->spApiConfig->domainApiCallDebug;
        $expectedDomainConfig = $this->_buildExpectedStandardOrdersV0Config($this->spApiConfig)
            ->setDebug($newDebugValue);

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient(OrdersV0Api::class);
        $sut->withConfig(function (Configuration $ordersV0Config) use ($newDebugValue) {
            $ordersV0Config->setDebug($newDebugValue);
        });

        $this->assertEquals($newDebugValue, $sut->getDomainConfig()->getDebug());
        $this->assertEquals($expectedDomainConfig, $sut->getDomainConfig());
    }

    public function test_withConfig_happy_case_ignores_return_value_in_callback()
    {
        $expectedDomainConfig  = $this->_buildExpectedStandardOrdersV0Config($this->spApiConfig);
        $differentDomainConfig = (new Configuration())->setHost('https://example.com');

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient(OrdersV0Api::class);
        $sut->withConfig(function (Configuration $ordersV0Config) use ($differentDomainConfig) {
            return $differentDomainConfig;
        });

        $this->assertNotEquals($differentDomainConfig, $sut->getDomainConfig());
        $this->assertEquals($expectedDomainConfig, $sut->getDomainConfig());
    }

    public function test_withConfig_ignores_reassignment_in_callback()
    {
        $expectedDomainConfig  = $this->_buildExpectedStandardOrdersV0Config($this->spApiConfig);
        $differentDomainConfig = (new Configuration())->setHost('https://example.com');

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient(OrdersV0Api::class);
        $sut->withConfig(function (Configuration $ordersV0Config) use ($differentDomainConfig) {
            $ordersV0Config = $differentDomainConfig;
        });

        $this->assertNotEquals($differentDomainConfig, $sut->getDomainConfig());
        $this->assertEquals($expectedDomainConfig, $sut->getDomainConfig());
    }

    public function test_withConfig_called_before_forClient_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage("Method 'withConfig' cannot be called before");
        $sut->withConfig(function (Configuration $ordersV0Config) {
            //
        });
    }

    public function test_withRdtProvider()
    {
        $expectedRdtProvider = function () {
            return 'foo';
        };

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->withRdtProvider($expectedRdtProvider);

        $this->assertEquals($expectedRdtProvider, $sut->getRdtProvider());
    }

    public function test_pushGuzzleMiddleware()
    {
        $middlewareName = 'fake_middleware_name';
        $middleware     = function () {
            return 'fake middleware';
        };

        $this->guzzleHandlerStack->shouldReceive('push')
            ->once()
            ->withArgs(function (...$args) use ($middlewareName, $middleware) {
                return $args[0] == $middleware
                    && $args[1] === $middlewareName;
            });

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->pushGuzzleMiddleware($middleware, $middlewareName);

        $this->assertEquals($this->guzzleHandlerStack, $sut->getGuzzleHandlerStack());
    }

    public function test_overrideAwsCredentialScopeService()
    {
        $awsCredentialScopeServiceOverride = 'fake-service';

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );

        $sut->overrideAwsCredentialScopeService($awsCredentialScopeServiceOverride);

        $this->assertEquals(
            $awsCredentialScopeServiceOverride,
            $sut->getAwsCredentialScopeServiceOverride()
        );
    }

    public function test_overrideAwsCredentialScopeRegion()
    {
        $awsCredentialScopeRegionOverride = 'fake-region';

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );

        $sut->overrideAwsCredentialScopeRegion($awsCredentialScopeRegionOverride);

        $this->assertEquals(
            $awsCredentialScopeRegionOverride,
            $sut->getAwsCredentialScopeRegionOverride()
        );
    }

    public function test_createClient_happy_case_with_non_empty_guzzleHandlerStack()
    {
        $this->_arrangeHappyCaseForHandlerStack(
            $this->spApiConfig->defaultAwsCredentialScopeService,
            $this->spApiConfig->defaultAwsCredentialScopeRegion
        );

        $expectedDomainClient = $this->_buildHappyCaseDomainClient();
        $middlewareName       = 'fake_middleware_name';
        $middleware           = function () {
            return 'fake middleware';
        };

        $this->guzzleHandlerStack->shouldReceive('push')
            ->once()
            ->withArgs(function (...$args) use ($middlewareName, $middleware) {
                return $args[0] == $middleware
                    && $args[1] === $middlewareName;
            });

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient(OrdersV0Api::class);
        $sut->pushGuzzleMiddleware($middleware, $middlewareName);

        $actualDomainClient = $sut->createClient();

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_happy_case_with_non_null_rdtProvider()
    {
        $expectedRdtProvider  = function () {
            return 'foo';
        };

        $this->_arrangeHappyCaseForHandlerStack(
            $this->spApiConfig->defaultAwsCredentialScopeService,
            $this->spApiConfig->defaultAwsCredentialScopeRegion,
            $expectedRdtProvider
        );

        $expectedDomainClient = $this->_buildHappyCaseDomainClient();

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient(OrdersV0Api::class);
        $sut->withRdtProvider($expectedRdtProvider);

        $actualDomainClient = $sut->createClient();

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_happy_case_with_non_null_awsCredentialScopeServiceOverride()
    {
        $awsCredentialScopeServiceOverride = 'fake-service';

        $this->_arrangeHappyCaseForHandlerStack(
            $awsCredentialScopeServiceOverride,
            $this->spApiConfig->defaultAwsCredentialScopeRegion
        );

        $expectedDomainClient = $this->_buildHappyCaseDomainClient();

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient(OrdersV0Api::class);
        $sut->overrideAwsCredentialScopeService($awsCredentialScopeServiceOverride);

        $actualDomainClient = $sut->createClient();

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_happy_case_with_non_null_awsCredentialScopeRegionOverride()
    {
        $awsCredentialScopeRegionOverride = 'fake-region';

        $this->_arrangeHappyCaseForHandlerStack(
            $this->spApiConfig->defaultAwsCredentialScopeService,
            $awsCredentialScopeRegionOverride
        );

        $expectedDomainClient = $this->_buildHappyCaseDomainClient();

        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );
        $sut->forClient(OrdersV0Api::class);
        $sut->overrideAwsCredentialScopeRegion($awsCredentialScopeRegionOverride);

        $actualDomainClient = $sut->createClient();

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_with_null_clientClassFqn_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig,
            $this->guzzleHandlerStack
        );

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('Builder not ready to create');
        $sut->createClient();
    }

    /**
     * @return array
     */
    protected function _buildHappyCaseDomainClient()
    {
        $expectedGuzzleClient = new Client(['handler' => $this->guzzleHandlerStack]);
        $expectedDomainConfig = $this->_buildExpectedStandardOrdersV0Config($this->spApiConfig);
        $expectedDomainClient = new OrdersV0Api(
            $expectedGuzzleClient,
            $expectedDomainConfig
        );
        return $expectedDomainClient;
    }

    /**
     * @return Configuration
     */
    protected function _buildExpectedStandardOrdersV0Config(SpApiConfig $spApiConfig)
    {
        return (new Configuration())
            ->setUserAgent($spApiConfig->userAgent())
            ->setHost($spApiConfig->defaultBaseUrl)
            ->setDebug($spApiConfig->domainApiCallDebug);
    }

    protected function _arrangeHappyCaseForHandlerStack(
        $expectedAwsCredentialScopeService,
        $expectedAwsCredentialScopeRegion,
        callable $expectedRdtProvider = null
    ) {
        $expectedSpApiAccessTokenMiddleware = new SpApiAccessTokenMiddleware(
            $this->lwaService,
            $expectedRdtProvider
        );
        $expectedAwsSignatureV4Middleware   = new AwsSignatureV4Middleware(
            $this->awsCredentialProvider,
            new SignatureV4(
                $expectedAwsCredentialScopeService,
                $expectedAwsCredentialScopeRegion
            )
        );

        $this->guzzleHandlerStack->shouldReceive('push')
            ->once()
            ->withArgs(function (...$args) use ($expectedSpApiAccessTokenMiddleware) {
                return $args[0] == $expectedSpApiAccessTokenMiddleware
                    && $args[1] === SpApiAccessTokenMiddleware::MIDDLEWARE_NAME;
            });

        $this->guzzleHandlerStack->shouldReceive('push')
            ->once()
            ->withArgs(function (...$args) use ($expectedAwsSignatureV4Middleware) {
                return $args[0] == $expectedAwsSignatureV4Middleware
                    && $args[1] === AwsSignatureV4Middleware::MIDDLEWARE_NAME;
            });
    }
}
