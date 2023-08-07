<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration;
use Glue\SpApi\OpenAPI\Exceptions\ClientBuilderException;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticatorContract;
use Glue\SpApi\OpenAPI\Services\Builder\ClientBuilder;
use Glue\SpApi\OpenAPI\SpApiConfig;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientBuilderTest extends TestCase
{
    /**
     * @var ClientAuthenticatorContract|MockInterface
     */
    public $authenticator;

    /**
     * @var SpApiConfig|MockInterface
     */
    public $spApiConfig;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->authenticator = \Mockery::mock(ClientAuthenticatorContract::class);
        $this->spApiConfig   = \Mockery::mock(SpApiConfig::class);
    }

    public function test_forApi_happy_case()
    {
        $expectedApiClassFqn = OrdersV0Api::class;

        $sut = new ClientBuilder($this->authenticator, $this->spApiConfig);
        $sut->forApi($expectedApiClassFqn);

        $this->assertEquals($expectedApiClassFqn, $sut->getApiClassFqn());
        $this->assertInstanceOf(Configuration::class, $sut->getDomainConfig());
    }

    public function test_forApi_throws_ClientBuilderException()
    {
        $sut = new ClientBuilder($this->authenticator, $this->spApiConfig);

        $this->expectException(ClientBuilderException::class);
        $sut->forApi('\Invalid\Api\Class');
    }
}
