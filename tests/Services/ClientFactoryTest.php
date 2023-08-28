<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticatorInterface;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactory;
use GuzzleHttp\ClientInterface;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientFactoryTest extends TestCase
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

    public function test_createAplusContentV20201101ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi::class,
            'createAplusContentV20201101ApiClient'
        );
    }

    public function test_createAuthorizationV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi::class,
            'createAuthorizationV1ApiClient'
        );
    }

    public function test_createCatalogItemsV0ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi::class,
            'createCatalogItemsV0ApiClient'
        );
    }

    public function test_createCatalogItemsV20201201ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi::class,
            'createCatalogItemsV20201201ApiClient'
        );
    }

    public function test_createDefinitionsProductTypesV20200901ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi::class,
            'createDefinitionsProductTypesV20200901ApiClient'
        );
    }

    public function test_createEasyShipV20220323ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi::class,
            'createEasyShipV20220323ApiClient'
        );
    }

    public function test_createFbaInboundEligibilityV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi::class,
            'createFbaInboundEligibilityV1ApiClient'
        );
    }

    public function test_createFbaInventoryV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi::class,
            'createFbaInventoryV1ApiClient'
        );
    }

    public function test_createFbaSmallAndLightV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi::class,
            'createFbaSmallAndLightV1ApiClient'
        );
    }

    public function test_createFeedsV20200904ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi::class,
            'createFeedsV20200904ApiClient'
        );
    }

    public function test_createFeedsV20210630ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi::class,
            'createFeedsV20210630ApiClient'
        );
    }

    public function test_createFinancesV0ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi::class,
            'createFinancesV0ApiClient'
        );
    }

    public function test_createFulfillmentInboundV0ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi::class,
            'createFulfillmentInboundV0ApiClient'
        );
    }

    public function test_createFulfillmentOutboundV20200701ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi::class,
            'createFulfillmentOutboundV20200701ApiClient'
        );
    }

    public function test_createListingsItemsV20200901ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi::class,
            'createListingsItemsV20200901ApiClient'
        );
    }

    public function test_createListingsItemsV20210801ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi::class,
            'createListingsItemsV20210801ApiClient'
        );
    }

    public function test_createListingsRestrictionsV20210801ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi::class,
            'createListingsRestrictionsV20210801ApiClient'
        );
    }

    public function test_createMerchantFulfillmentV0ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi::class,
            'createMerchantFulfillmentV0ApiClient'
        );
    }

    public function test_createNotificationsV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi::class,
            'createNotificationsV1ApiClient'
        );
    }

    public function test_createOrdersV0ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api::class,
            'createOrdersV0ApiClient'
        );
    }

    public function test_createOrdersV0ShipmentApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi::class,
            'createOrdersV0ShipmentApiClient'
        );
    }

    public function test_createProductFeesV0ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi::class,
            'createProductFeesV0ApiClient'
        );
    }

    public function test_createProductPricingV0ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi::class,
            'createProductPricingV0ApiClient'
        );
    }

    public function test_createReplenishmentV20221107OffersApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi::class,
            'createReplenishmentV20221107OffersApiClient'
        );
    }

    public function test_createReplenishmentV20221107SellingpartnersApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi::class,
            'createReplenishmentV20221107SellingpartnersApiClient'
        );
    }

    public function test_createReportsV20200904ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi::class,
            'createReportsV20200904ApiClient'
        );
    }

    public function test_createReportsV20210630ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi::class,
            'createReportsV20210630ApiClient'
        );
    }

    public function test_createSalesV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi::class,
            'createSalesV1ApiClient'
        );
    }

    public function test_createSellersV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi::class,
            'createSellersV1ApiClient'
        );
    }

    public function test_createServicesV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi::class,
            'createServicesV1ApiClient'
        );
    }

    public function test_createShipmentInvoicingV0ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi::class,
            'createShipmentInvoicingV0ApiClient'
        );
    }

    public function test_createSupplySourcesV20200701ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi::class,
            'createSupplySourcesV20200701ApiClient'
        );
    }

    public function test_createTokensV20210301ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi::class,
            'createTokensV20210301ApiClient'
        );
    }

    public function test_createUploadsV20201101ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi::class,
            'createUploadsV20201101ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentInventoryV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi::class,
            'createVendorDirectFulfillmentInventoryV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentOrdersV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi::class,
            'createVendorDirectFulfillmentOrdersV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentOrdersV20211228ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi::class,
            'createVendorDirectFulfillmentOrdersV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentPaymentsV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi::class,
            'createVendorDirectFulfillmentPaymentsV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentSandboxDataV20211228ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi::class,
            'createVendorDirectFulfillmentSandboxDataV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi::class,
            'createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi::class,
            'createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi::class,
            'createVendorDirectFulfillmentShippingV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV1LabelsApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi::class,
            'createVendorDirectFulfillmentShippingV1LabelsApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi::class,
            'createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi::class,
            'createVendorDirectFulfillmentShippingV20211228ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentShippingV20211228LabelsApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi::class,
            'createVendorDirectFulfillmentShippingV20211228LabelsApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentTransactionsV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi::class,
            'createVendorDirectFulfillmentTransactionsV1ApiClient'
        );
    }

    public function test_createVendorDirectFulfillmentTransactionsV20211228ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi::class,
            'createVendorDirectFulfillmentTransactionsV20211228ApiClient'
        );
    }

    public function test_createVendorTransactionStatusV1ApiClient()
    {
        $this->_arrange_and_assert_it_can_create_expected_client(
            \Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi::class,
            'createVendorTransactionStatusV1ApiClient'
        );
    }

    /**
     * @param string $expectedApiClass
     * @param string $methodUnderTest
     * @return void
     */
    protected function _arrange_and_assert_it_can_create_expected_client(
        $expectedApiClass,
        $methodUnderTest
    ) {
        $this->authenticator->shouldReceive('createAuthenticatedGuzzleClient')
            ->andReturn(\Mockery::mock(ClientInterface::class));

        $sut = new ClientFactory($this->authenticator, $this->spApiConfig);
        $actualApiClient = $sut->{$methodUnderTest}();

        $this->assertInstanceOf($expectedApiClass, $actualApiClient);
    }
}
