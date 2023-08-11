<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Services\Builder\ClientBuilderInterface;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactory;
use Glue\SpApi\OpenAPI\SpApiConfig;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientFactoryTest extends TestCase
{
    /**
     * @var ClientBuilderInterface|MockInterface
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
        $this->builder     = \Mockery::mock(ClientBuilderInterface::class);
        $this->spApiConfig = \Mockery::mock(SpApiConfig::class);
    }

    public function test_createAplusContentV20201101ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createAplusContentV20201101ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createAuthorizationV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createAuthorizationV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createCatalogItemsV0ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createCatalogItemsV0ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createCatalogItemsV20201201ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createCatalogItemsV20201201ApiClient($domainConfig);

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

    public function test_createEasyShipV20220323ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createEasyShipV20220323ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createFbaInboundEligibilityV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createFbaInboundEligibilityV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createFbaInventoryV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createFbaInventoryV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createFbaSmallAndLightV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createFbaSmallAndLightV1ApiClient($domainConfig);

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

    public function test_createFinancesV0ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\FinancesV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createFinancesV0ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createFulfillmentInboundV0ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createFulfillmentInboundV0ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createFulfillmentOutboundV20200701ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createFulfillmentOutboundV20200701ApiClient($domainConfig);

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

    public function test_createListingsItemsV20210801ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createListingsItemsV20210801ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createListingsRestrictionsV20210801ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createListingsRestrictionsV20210801ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createMerchantFulfillmentV0ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createMerchantFulfillmentV0ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createNotificationsV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\NotificationsV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createNotificationsV1ApiClient($domainConfig);

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

    public function test_createProductFeesV0ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createProductFeesV0ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createProductPricingV0ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createProductPricingV0ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createReplenishmentV20221107OffersApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createReplenishmentV20221107OffersApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createReplenishmentV20221107SellingpartnersApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createReplenishmentV20221107SellingpartnersApiClient($domainConfig);

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

    public function test_createSalesV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\SalesV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createSalesV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createSellersV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\SellersV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createSellersV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createServicesV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ServicesV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createServicesV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createShipmentInvoicingV0ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createShipmentInvoicingV0ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
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

    public function test_createTokensV20210301ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createTokensV20210301ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createUploadsV20201101ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createUploadsV20201101ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentInventoryV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentInventoryV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentOrdersV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentOrdersV1ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentOrdersV20211228ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentOrdersV20211228ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentPaymentsV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentPaymentsV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentSandboxDataV20211228ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentSandboxDataV20211228ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentShippingV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentShippingV1ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentShippingV1LabelsApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentShippingV1LabelsApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentShippingV20211228ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentShippingV20211228ApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentShippingV20211228LabelsApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Configuration();
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi();
        $rdtProvider       = function () {
            return 'foo';
        };
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);
        $this->_setUpRdtProviderExpectationsForBuilder($rdtProvider);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentShippingV20211228LabelsApiClient($domainConfig, $rdtProvider);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentTransactionsV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentTransactionsV1ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorDirectFulfillmentTransactionsV20211228ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorDirectFulfillmentTransactionsV20211228ApiClient($domainConfig);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }

    public function test_createVendorTransactionStatusV1ApiClient()
    {
        $domainConfig      = new \Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Configuration;
        $expectedApiClient = new \Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi();
        $this->_setUpStandardExpectationsForBuilder($expectedApiClient, $domainConfig);

        $sut             = new ClientFactory($this->builder, $this->spApiConfig);
        $actualApiClient = $sut->createVendorTransactionStatusV1ApiClient($domainConfig);

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
