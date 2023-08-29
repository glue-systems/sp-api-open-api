<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticatorInterface;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactory;
use Glue\SpApi\OpenAPI\Utilities\BuilderMiddlewarePipeline;
use Glue\SpApi\OpenAPI\Utilities\ClientBuilder;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;
use Mockery;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientFactoryTest extends TestCase
{
    /**
     * @var ClientAuthenticatorInterface|MockInterface
     */
    public $authenticator;

    /**
     * @var BuilderMiddlewarePipeline|MockInterface
     */
    public $pipeline;

    /**
     * @var SpApiConfig
     */
    public $spApiConfig;

    /**
     * @var HandlerStack
     */
    public $emptyGuzzleHandlerStack;

    /**
     * @var callable
     */
    public $makeNewGuzzleHandlerStack;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->authenticator             = Mockery::mock(ClientAuthenticatorInterface::class);
        $this->pipeline                  = Mockery::mock(BuilderMiddlewarePipeline::class);
        $this->spApiConfig               = $this->buildSpApiConfig();
        $this->emptyGuzzleHandlerStack   = new HandlerStack();
        $this->makeNewGuzzleHandlerStack = function () {
            return $this->emptyGuzzleHandlerStack;
        };
    }

    public function test_createAplusContentV20201101ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi::class,
            'createAplusContentV20201101ApiClient'
        );
    }

    public function test_createAplusContentV20201101ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi::class,
            'createAplusContentV20201101ApiClient'
        );
    }

    public function test_createAuthorizationV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi::class,
            'createAuthorizationV1ApiClient'
        );
    }

    public function test_createAuthorizationV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi::class,
            'createAuthorizationV1ApiClient'
        );
    }

    public function test_createCatalogItemsV0ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi::class,
            'createCatalogItemsV0ApiClient'
        );
    }

    public function test_createCatalogItemsV0ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi::class,
            'createCatalogItemsV0ApiClient'
        );
    }

    public function test_createCatalogItemsV20201201ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi::class,
            'createCatalogItemsV20201201ApiClient'
        );
    }

    public function test_createCatalogItemsV20201201ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi::class,
            'createCatalogItemsV20201201ApiClient'
        );
    }

    public function test_createDefinitionsProductTypesV20200901ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi::class,
            'createDefinitionsProductTypesV20200901ApiClient'
        );
    }

    public function test_createDefinitionsProductTypesV20200901ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi::class,
            'createDefinitionsProductTypesV20200901ApiClient'
        );
    }

    public function test_createEasyShipV20220323ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi::class,
            'createEasyShipV20220323ApiClient'
        );
    }

    public function test_createEasyShipV20220323ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi::class,
            'createEasyShipV20220323ApiClient'
        );
    }

    public function test_createFbaInboundEligibilityV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi::class,
            'createFbaInboundEligibilityV1ApiClient'
        );
    }

    public function test_createFbaInboundEligibilityV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi::class,
            'createFbaInboundEligibilityV1ApiClient'
        );
    }

    public function test_createFbaInventoryV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi::class,
            'createFbaInventoryV1ApiClient'
        );
    }

    public function test_createFbaInventoryV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi::class,
            'createFbaInventoryV1ApiClient'
        );
    }

    public function test_createFbaSmallAndLightV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi::class,
            'createFbaSmallAndLightV1ApiClient'
        );
    }

    public function test_createFbaSmallAndLightV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi::class,
            'createFbaSmallAndLightV1ApiClient'
        );
    }

    public function test_createFeedsV20200904ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi::class,
            'createFeedsV20200904ApiClient'
        );
    }

    public function test_createFeedsV20200904ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi::class,
            'createFeedsV20200904ApiClient'
        );
    }

    public function test_createFeedsV20210630ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi::class,
            'createFeedsV20210630ApiClient'
        );
    }

    public function test_createFeedsV20210630ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi::class,
            'createFeedsV20210630ApiClient'
        );
    }

    public function test_createFinancesV0ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi::class,
            'createFinancesV0ApiClient'
        );
    }

    public function test_createFinancesV0ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi::class,
            'createFinancesV0ApiClient'
        );
    }

    public function test_createFulfillmentInboundV0ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi::class,
            'createFulfillmentInboundV0ApiClient'
        );
    }

    public function test_createFulfillmentInboundV0ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi::class,
            'createFulfillmentInboundV0ApiClient'
        );
    }

    public function test_createFulfillmentOutboundV20200701ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi::class,
            'createFulfillmentOutboundV20200701ApiClient'
        );
    }

    public function test_createFulfillmentOutboundV20200701ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi::class,
            'createFulfillmentOutboundV20200701ApiClient'
        );
    }

    public function test_createListingsItemsV20200901ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi::class,
            'createListingsItemsV20200901ApiClient'
        );
    }

    public function test_createListingsItemsV20200901ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi::class,
            'createListingsItemsV20200901ApiClient'
        );
    }

    public function test_createListingsItemsV20210801ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi::class,
            'createListingsItemsV20210801ApiClient'
        );
    }

    public function test_createListingsItemsV20210801ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi::class,
            'createListingsItemsV20210801ApiClient'
        );
    }

    public function test_createListingsRestrictionsV20210801ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi::class,
            'createListingsRestrictionsV20210801ApiClient'
        );
    }

    public function test_createListingsRestrictionsV20210801ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi::class,
            'createListingsRestrictionsV20210801ApiClient'
        );
    }

    public function test_createMerchantFulfillmentV0ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi::class,
            'createMerchantFulfillmentV0ApiClient'
        );
    }

    public function test_createMerchantFulfillmentV0ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi::class,
            'createMerchantFulfillmentV0ApiClient'
        );
    }

    public function test_createNotificationsV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi::class,
            'createNotificationsV1ApiClient'
        );
    }

    public function test_createNotificationsV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi::class,
            'createNotificationsV1ApiClient'
        );
    }

    public function test_createOrdersV0ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api::class,
            'createOrdersV0ApiClient'
        );
    }

    public function test_createOrdersV0ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api::class,
            'createOrdersV0ApiClient'
        );
    }

    public function test_createOrdersV0ShipmentApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi::class,
            'createOrdersV0ShipmentApiClient'
        );
    }

    public function test_createOrdersV0ShipmentApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi::class,
            'createOrdersV0ShipmentApiClient'
        );
    }

    public function test_createProductFeesV0ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi::class,
            'createProductFeesV0ApiClient'
        );
    }

    public function test_createProductFeesV0ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi::class,
            'createProductFeesV0ApiClient'
        );
    }

    public function test_createProductPricingV0ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi::class,
            'createProductPricingV0ApiClient'
        );
    }

    public function test_createProductPricingV0ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi::class,
            'createProductPricingV0ApiClient'
        );
    }

    public function test_createReplenishmentV20221107OffersApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi::class,
            'createReplenishmentV20221107OffersApiClient'
        );
    }

    public function test_createReplenishmentV20221107OffersApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi::class,
            'createReplenishmentV20221107OffersApiClient'
        );
    }

    public function test_createReplenishmentV20221107SellingpartnersApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi::class,
            'createReplenishmentV20221107SellingpartnersApiClient'
        );
    }

    public function test_createReplenishmentV20221107SellingpartnersApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi::class,
            'createReplenishmentV20221107SellingpartnersApiClient'
        );
    }

    public function test_createReportsV20200904ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi::class,
            'createReportsV20200904ApiClient'
        );
    }

    public function test_createReportsV20200904ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi::class,
            'createReportsV20200904ApiClient'
        );
    }

    public function test_createReportsV20210630ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi::class,
            'createReportsV20210630ApiClient'
        );
    }

    public function test_createReportsV20210630ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi::class,
            'createReportsV20210630ApiClient'
        );
    }

    public function test_createSalesV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi::class,
            'createSalesV1ApiClient'
        );
    }

    public function test_createSalesV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi::class,
            'createSalesV1ApiClient'
        );
    }

    public function test_createSellersV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi::class,
            'createSellersV1ApiClient'
        );
    }

    public function test_createSellersV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi::class,
            'createSellersV1ApiClient'
        );
    }

    public function test_createServicesV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi::class,
            'createServicesV1ApiClient'
        );
    }

    public function test_createServicesV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi::class,
            'createServicesV1ApiClient'
        );
    }

    public function test_createShipmentInvoicingV0ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi::class,
            'createShipmentInvoicingV0ApiClient'
        );
    }

    public function test_createShipmentInvoicingV0ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi::class,
            'createShipmentInvoicingV0ApiClient'
        );
    }

    public function test_createSupplySourcesV20200701ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi::class,
            'createSupplySourcesV20200701ApiClient'
        );
    }

    public function test_createSupplySourcesV20200701ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi::class,
            'createSupplySourcesV20200701ApiClient'
        );
    }

    public function test_createTokensV20210301ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi::class,
            'createTokensV20210301ApiClient'
        );
    }

    public function test_createTokensV20210301ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi::class,
            'createTokensV20210301ApiClient'
        );
    }

    public function test_createUploadsV20201101ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi::class,
            'createUploadsV20201101ApiClient'
        );
    }

    public function test_createUploadsV20201101ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi::class,
            'createUploadsV20201101ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentInventoryV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi::class,
            'createVendorDirectFulfillmentInventoryV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentInventoryV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi::class,
            'createVendorDirectFulfillmentInventoryV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentOrdersV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi::class,
            'createVendorDirectFulfillmentOrdersV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentOrdersV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi::class,
            'createVendorDirectFulfillmentOrdersV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentOrdersV20211228ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi::class,
            'createVendorDirectFulfillmentOrdersV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentOrdersV20211228ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi::class,
            'createVendorDirectFulfillmentOrdersV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentPaymentsV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi::class,
            'createVendorDirectFulfillmentPaymentsV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentPaymentsV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi::class,
            'createVendorDirectFulfillmentPaymentsV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentSandboxDataV20211228ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi::class,
            'createVendorDirectFulfillmentSandboxDataV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentSandboxDataV20211228ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi::class,
            'createVendorDirectFulfillmentSandboxDataV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi::class,
            'createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi::class,
            'createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi::class,
            'createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi::class,
            'createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi::class,
            'createVendorDirectFulfillmentShippingV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi::class,
            'createVendorDirectFulfillmentShippingV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1LabelsApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi::class,
            'createVendorDirectFulfillmentShippingV1LabelsApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1LabelsApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi::class,
            'createVendorDirectFulfillmentShippingV1LabelsApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi::class,
            'createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi::class,
            'createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi::class,
            'createVendorDirectFulfillmentShippingV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi::class,
            'createVendorDirectFulfillmentShippingV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228LabelsApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi::class,
            'createVendorDirectFulfillmentShippingV20211228LabelsApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228LabelsApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi::class,
            'createVendorDirectFulfillmentShippingV20211228LabelsApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentTransactionsV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi::class,
            'createVendorDirectFulfillmentTransactionsV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentTransactionsV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi::class,
            'createVendorDirectFulfillmentTransactionsV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentTransactionsV20211228ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi::class,
            'createVendorDirectFulfillmentTransactionsV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentTransactionsV20211228ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi::class,
            'createVendorDirectFulfillmentTransactionsV20211228ApiClient'
        );
    }

    public function test_createVendorTransactionStatusV1ApiClient_without_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_without_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi::class,
            'createVendorTransactionStatusV1ApiClient'
        );
    }

    public function test_createVendorTransactionStatusV1ApiClient_with_pipeline()
    {
        $this->_arrange_and_assert_it_can_create_expected_client_with_pipeline(
            \Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi::class,
            'createVendorTransactionStatusV1ApiClient'
        );
    }

    /**
     * @param string $expectedApiClass
     * @param string $methodUnderTest
     * @return void
     */
    protected function _arrange_and_assert_it_can_create_expected_client_without_pipeline(
        $expectedApiClass,
        $methodUnderTest
    ) {
        $this->authenticator->shouldReceive('createAuthenticatedGuzzleClient')
            ->once()
            ->andReturn(Mockery::mock(ClientInterface::class));

        $sut = new ClientFactory(
            $this->authenticator,
            $this->spApiConfig,
            $this->makeNewGuzzleHandlerStack
        );
        $actualApiClient = $sut->{$methodUnderTest}();

        $this->assertInstanceOf($expectedApiClass, $actualApiClient);
    }

    /**
     * @param string $expectedApiClass
     * @param string $methodUnderTest
     * @param BuilderMiddlewarePipeline $pipeline
     * @return void
     */
    protected function _arrange_and_assert_it_can_create_expected_client_with_pipeline(
        $expectedApiClass,
        $methodUnderTest
    ) {
        /**
         * @var ClientBuilder|MockInterface $builderToInject
         */
        $builderToInject            = Mockery::mock(ClientBuilder::class);
        $expectedApiClient          = new $expectedApiClass();

        $this->pipeline->shouldReceive('send')
            ->once()
            ->withArgs(function ($arg0) use ($expectedApiClass) {
                return $arg0 == (new ClientBuilder(
                    $this->spApiConfig,
                    $this->emptyGuzzleHandlerStack
                ))->forApi($expectedApiClass);
            })
            ->andReturn($builderToInject);

        $builderToInject->shouldReceive('createClient')
            ->once()
            ->with($this->authenticator)
            ->andReturn($expectedApiClient);

        $sut = new ClientFactory(
            $this->authenticator,
            $this->spApiConfig,
            $this->makeNewGuzzleHandlerStack
        );
        $actualApiClient = $sut->{$methodUnderTest}($this->pipeline);

        $this->assertEquals($expectedApiClient, $actualApiClient);
    }
}
