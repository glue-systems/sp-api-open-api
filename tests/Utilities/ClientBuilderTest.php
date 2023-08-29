<?php

namespace Tests\Utilities;

use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\ClientBuilderException;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticatorInterface;
use Glue\SpApi\OpenAPI\Utilities\ClientBuilder;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientBuilderTest extends TestCase
{
    /**
     * @var ClientAuthenticatorInterface|MockInterface
     */
    public $authenticator;

    /**
     * @var HandlerStack
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
        $this->authenticator      = \Mockery::mock(ClientAuthenticatorInterface::class);
        $this->guzzleHandlerStack = HandlerStack::create();
        $this->spApiConfig        = $this->buildSpApiConfig();
    }

    public function test_forApi_happy_case()
    {
        $expectedApiClassFqn  = OrdersV0Api::class;
        $expectedDomainConfig = $this->_buildExpectedStandardOrdersV0Config($this->spApiConfig);

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi($expectedApiClassFqn);

        $this->assertEquals($expectedApiClassFqn, $sut->getApiClassFqn());
        $this->assertEquals($expectedDomainConfig, $sut->getDomainConfig());
    }

    public function test_forApi_throws_ClientBuilderException_on_invalid_fqn()
    {
        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('Invalid API class FQN');
        $sut->forApi('\Invalid\Api\Class');
    }

    public function test_forApi_throws_ClientBuilderException_on_2nd_call()
    {
        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi(OrdersV0Api::class);

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('cannot be called more than once');
        $sut->forApi(OrdersV0Api::class);
    }

    public function test_withConfig_happy_case_with_changes_made_via_callback()
    {
        $newDebugValue        = !$this->spApiConfig->domainApiCallDebug;
        $expectedDomainConfig = $this->_buildExpectedStandardOrdersV0Config($this->spApiConfig)
            ->setDebug($newDebugValue);

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi(OrdersV0Api::class);
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

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi(OrdersV0Api::class);
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

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi(OrdersV0Api::class);
        $sut->withConfig(function (Configuration $ordersV0Config) use ($differentDomainConfig) {
            $ordersV0Config = $differentDomainConfig;
        });

        $this->assertNotEquals($differentDomainConfig, $sut->getDomainConfig());
        $this->assertEquals($expectedDomainConfig, $sut->getDomainConfig());
    }

    public function test_withConfig_called_before_forApi_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);

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

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->withRdtProvider($expectedRdtProvider);

        $this->assertEquals($expectedRdtProvider, $sut->getRdtProvider());
    }

    public function test_pushGuzzleMiddleware()
    {
        $middlewareName = 'fake_middleware_name';
        $middleware     = function () {
            return 'fake middleware';
        };
        $expectedHandlerStack = clone $this->guzzleHandlerStack;
        $expectedHandlerStack->push($middleware, $middlewareName);

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->pushGuzzleMiddleware($middleware, $middlewareName);

        $this->assertEquals($expectedHandlerStack, $sut->getGuzzleHandlerStack());
    }

    public function test_overrideAwsCredentialScopeService()
    {
        $awsCredentialScopeServiceOverride = 'fake-service';

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);

        $sut->overrideAwsCredentialScopeService($awsCredentialScopeServiceOverride);

        $this->assertEquals(
            $awsCredentialScopeServiceOverride,
            $sut->getAwsCredentialScopeServiceOverride()
        );
    }

    public function test_overrideAwsCredentialScopeRegion()
    {
        $awsCredentialScopeRegionOverride = 'fake-region';

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);

        $sut->overrideAwsCredentialScopeRegion($awsCredentialScopeRegionOverride);

        $this->assertEquals(
            $awsCredentialScopeRegionOverride,
            $sut->getAwsCredentialScopeRegionOverride()
        );
    }

    public function test_createClient_happy_case_with_non_empty_guzzleHandlerStack()
    {
        list($expectedGuzzleClient, $expectedDomainClient) = $this->_buildHappyCaseClients();
        $middlewareName = 'fake_middleware_name';
        $middleware     = function () {
            return 'fake middleware';
        };

        $expectedHandlerStack = clone $this->guzzleHandlerStack;
        $expectedHandlerStack->push($middleware, $middlewareName);

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi(OrdersV0Api::class);
        $sut->pushGuzzleMiddleware($middleware, $middlewareName);

        $this->authenticator->shouldReceive('createAuthenticatedGuzzleClient')
            ->once()
            ->withArgs(function (...$args) use ($expectedHandlerStack) {
                return $args[0] == $expectedHandlerStack
                    && is_null($args[1])
                    && is_null($args[2])
                    && is_null($args[3]);
            })
            ->andReturn($expectedGuzzleClient);

        $actualDomainClient = $sut->createClient($this->authenticator);

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_happy_case_with_non_null_rdtProvider()
    {
        $expectedRdtProvider  = function () {
            return 'foo';
        };
        list($expectedGuzzleClient, $expectedDomainClient) = $this->_buildHappyCaseClients();

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi(OrdersV0Api::class);
        $sut->withRdtProvider($expectedRdtProvider);

        $this->authenticator->shouldReceive('createAuthenticatedGuzzleClient')
            ->once()
            ->with(
                $this->guzzleHandlerStack,
                $expectedRdtProvider,
                null,
                null
            )
            ->andReturn($expectedGuzzleClient);

        $actualDomainClient = $sut->createClient($this->authenticator);

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_happy_case_with_non_null_awsCredentialScopeServiceOverride()
    {
        list($expectedGuzzleClient, $expectedDomainClient) = $this->_buildHappyCaseClients();
        $awsCredentialScopeServiceOverride = 'fake-service';

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi(OrdersV0Api::class);
        $sut->overrideAwsCredentialScopeService($awsCredentialScopeServiceOverride);

        $this->authenticator->shouldReceive('createAuthenticatedGuzzleClient')
            ->once()
            ->with(
                $this->guzzleHandlerStack,
                null,
                $awsCredentialScopeServiceOverride,
                null
            )
            ->andReturn($expectedGuzzleClient);

        $actualDomainClient = $sut->createClient($this->authenticator);

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_happy_case_with_non_null_awsCredentialScopeRegionOverride()
    {
        list($expectedGuzzleClient, $expectedDomainClient) = $this->_buildHappyCaseClients();
        $awsCredentialScopeRegionOverride = 'fake-region';

        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);
        $sut->forApi(OrdersV0Api::class);
        $sut->overrideAwsCredentialScopeRegion($awsCredentialScopeRegionOverride);

        $this->authenticator->shouldReceive('createAuthenticatedGuzzleClient')
            ->once()
            ->with(
                $this->guzzleHandlerStack,
                null,
                null,
                $awsCredentialScopeRegionOverride
            )
            ->andReturn($expectedGuzzleClient);

        $actualDomainClient = $sut->createClient($this->authenticator);

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_with_null_apiClassFqn_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder($this->spApiConfig, $this->guzzleHandlerStack);

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('Builder not ready to create');
        $sut->createClient($this->authenticator);
    }

    /**
     * @return array
     */
    protected function _buildHappyCaseClients()
    {
        $expectedGuzzleClient = new Client(['headers' => ['foo' => 'bar']]);
        $expectedDomainConfig = $this->_buildExpectedStandardOrdersV0Config($this->spApiConfig);
        $expectedDomainClient = new OrdersV0Api(
            $expectedGuzzleClient,
            $expectedDomainConfig
        );
        return [$expectedGuzzleClient, $expectedDomainClient];
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
}
