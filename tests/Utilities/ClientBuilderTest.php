<?php

namespace Tests\Utilities;

use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration;
use Glue\SpApi\OpenAPI\Exceptions\ClientBuilderException;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticatorInterface;
use Glue\SpApi\OpenAPI\SpApiConfig;
use Glue\SpApi\OpenAPI\Utilities\ClientBuilder;
use GuzzleHttp\Client;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientBuilderTest extends TestCase
{
    /**
     * @var ClientAuthenticatorInterface|MockInterface
     */
    public $authenticator;

    /**
     * @var SpApiConfig
     */
    public $spApiConfig;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->authenticator = \Mockery::mock(ClientAuthenticatorInterface::class);
        $this->spApiConfig   = $this->buildSpApiConfig();
    }

    public function test_forApi_happy_case()
    {
        $expectedApiClassFqn = OrdersV0Api::class;

        $sut = new ClientBuilder($this->spApiConfig);
        $sut->forApi($expectedApiClassFqn);

        $this->assertEquals($expectedApiClassFqn, $sut->getApiClassFqn());
        $this->assertInstanceOf(Configuration::class, $sut->getDomainConfig());
    }

    public function test_forApi_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder($this->spApiConfig);

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('Invalid API class FQN');
        $sut->forApi('\Invalid\Api\Class');
    }

    public function test_withConfig_happy_case_with_non_null_argument()
    {
        $expectedDomainConfig = (new Configuration())
            ->setUsername('username-for-testing-only');

        $sut = new ClientBuilder($this->spApiConfig);
        $sut->forApi(OrdersV0Api::class);
        $sut->withConfig($expectedDomainConfig);

        $this->assertEquals($expectedDomainConfig, $sut->getDomainConfig());
    }

    public function test_withConfig_happy_case_with_null_argument()
    {
        $expectedDomainConfig = (new Configuration())
            ->setUserAgent($this->spApiConfig->userAgent())
            ->setHost($this->spApiConfig->spApiBaseUrl);

        $sut = new ClientBuilder($this->spApiConfig);
        $sut->forApi(OrdersV0Api::class);
        $sut->withConfig(null);

        $this->assertEquals($expectedDomainConfig, $sut->getDomainConfig());
    }

    public function test_withConfig_called_before_forApi_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder($this->spApiConfig);

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage("Method 'withConfig' cannot be called before");
        $sut->withConfig(new Configuration());
    }

    public function test_withConfig_of_incorrect_type_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder($this->spApiConfig);
        $sut->forApi(OrdersV0Api::class);

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('Invalid configuartion class');
        $sut->withConfig(new \Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Configuration());
    }

    public function test_withRdtProvider()
    {
        $expectedRdtProvider = function () {
            return 'foo';
        };

        $sut = new ClientBuilder($this->spApiConfig);
        $sut->withRdtProvider($expectedRdtProvider);

        $this->assertEquals($expectedRdtProvider, $sut->getRdtProvider());
    }

    public function test_createClient_happy_case_with_non_null_rdtProvider()
    {
        $expectedRdtProvider  = function () {
            return 'foo';
        };
        $expectedGuzzleClient = new Client(['base_uri' => 'https://example.com']);
        $expectedDomainConfig = (new Configuration())
            ->setUserAgent($this->spApiConfig->userAgent())
            ->setHost($this->spApiConfig->spApiBaseUrl);
        $expectedDomainClient = new OrdersV0Api(
            $expectedGuzzleClient,
            $expectedDomainConfig
        );

        $sut = new ClientBuilder($this->spApiConfig);
        $sut->forApi(OrdersV0Api::class);
        $sut->withRdtProvider($expectedRdtProvider);

        $this->authenticator->shouldReceive('createAuthenticatedGuzzleClient')
            ->once()
            ->with($expectedRdtProvider)
            ->andReturn($expectedGuzzleClient);

        $actualDomainClient = $sut->createClient($this->authenticator);

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_happy_case_with_null_rdtProvider()
    {
        $expectedGuzzleClient = new Client(['base_uri' => 'https://example.com']);
        $expectedDomainConfig = (new Configuration())
            ->setUserAgent($this->spApiConfig->userAgent())
            ->setHost($this->spApiConfig->spApiBaseUrl);
        $expectedDomainClient = new OrdersV0Api(
            $expectedGuzzleClient,
            $expectedDomainConfig
        );

        $sut = new ClientBuilder($this->spApiConfig);
        $sut->forApi(OrdersV0Api::class);
        $sut->withRdtProvider(null);

        $this->authenticator->shouldReceive('createAuthenticatedGuzzleClient')
            ->once()
            ->with(null)
            ->andReturn($expectedGuzzleClient);

        $actualDomainClient = $sut->createClient($this->authenticator);

        $this->assertEquals($expectedDomainClient, $actualDomainClient);
    }

    public function test_createClient_with_null_apiClassFqn_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder($this->spApiConfig);

        $this->expectException(ClientBuilderException::class);
        $this->expectExceptionMessage('Builder not ready to create');
        $sut->createClient($this->authenticator);
    }
}
