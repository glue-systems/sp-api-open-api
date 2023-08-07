<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Services\Builder\ClientBuilderContract;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactory;
use Glue\SpApi\OpenAPI\Services\SpApiConfig;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientFactoryTest extends TestCase
{
    /**
     * @var ClientBuilderContract|MockInterface
     */
    public $builder;

    /**
     * @var SpApiConfig|MockInterface
     */
    public $spApiConfig;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->builder     = \Mockery::mock(ClientBuilderContract::class);
        $this->spApiConfig = \Mockery::mock(SpApiConfig::class);
    }

    public function test_createSupplySourcesV20200701ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createSupplySourcesV20200701ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createListingsItemsV20200901ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createListingsItemsV20200901ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createOrdersV0ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createOrdersV0ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createOrdersV0ShipmentApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createOrdersV0ShipmentApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createDefinitionsProductTypesV20200901ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createDefinitionsProductTypesV20200901ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createTokensV20210301ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createTokensV20210301ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createFeedsV20200904ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createFeedsV20200904ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createFeedsV20210630ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createFeedsV20210630ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createReportsV20200904ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createReportsV20200904ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createReportsV20210630ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createReportsV20210630ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    protected function _setUpStandardExpectationsForBuilder(
        $expectedApiClient,
        $domainConfig
    ) {
        $this->builder->shouldReceive('forApi')
            ->once()
            ->with(get_class($expectedApiClient))
            ->andReturn($this->builder);
        $this->builder->shouldReceive('withConfig')
            ->once()
            ->with($domainConfig)
            ->andReturn($this->builder);
        $this->builder->shouldReceive('createClient')
            ->once()
            ->andReturn($expectedApiClient);
    }

    protected function _setUpRdtProviderExpectationsForBuilder(
        callable $rdtProvider = null
    ) {
        $this->builder->shouldReceive('withRdtProvider')
            ->once()
            ->with($rdtProvider)
            ->andReturn($this->builder);
    }
}
