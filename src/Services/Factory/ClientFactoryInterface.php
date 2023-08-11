<?php

namespace Glue\SpApi\OpenAPI\Services\Factory;

use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi as AplusContentV20201101Api;
use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Configuration as AplusContentV20201101Config;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi as AuthorizationV1Api;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Configuration as AuthorizationV1Config;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi as CatalogItemsV0Api;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Configuration as CatalogItemsV0Config;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi as CatalogItemsV20201201Api;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Configuration as CatalogItemsV20201201Config;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration as DefinitionsProductTypesV20200901Config;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi as EasyShipV20220323Api;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Configuration as EasyShipV20220323Config;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi as FbaInboundEligibilityV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Configuration as FbaInboundEligibilityV1Config;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi as FbaInventoryV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Configuration as FbaInventoryV1Config;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi as FbaSmallAndLightV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Configuration as FbaSmallAndLightV1Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi as FinancesV0Api;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Configuration as FinancesV0Config;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi as FulfillmentInboundV0Api;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Configuration as FulfillmentInboundV0Config;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi as FulfillmentOutboundV20200701Api;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Configuration as FulfillmentOutboundV20200701Config;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Configuration as ListingsItemsV20200901Config;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi as ListingsItemsV20210801Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Configuration as ListingsItemsV20210801Config;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi as ListingsRestrictionsV20210801Api;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Configuration as ListingsRestrictionsV20210801Config;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi as MerchantFulfillmentV0Api;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Configuration as MerchantFulfillmentV0Config;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi as NotificationsV1Api;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Configuration as NotificationsV1Config;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration as OrdersV0Config;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi as ProductFeesV0Api;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Configuration as ProductFeesV0Config;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi as ProductPricingV0Api;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Configuration as ProductPricingV0Config;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi as ReplenishmentV20221107OffersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi as ReplenishmentV20221107SellingpartnersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Configuration as ReplenishmentV20221107Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Configuration as ReportsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Configuration as ReportsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi as SalesV1Api;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Configuration as SalesV1Config;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi as SellersV1Api;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Configuration as SellersV1Config;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi as ServicesV1Api;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Configuration as ServicesV1Config;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi as ShipmentInvoicingV0Api;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Configuration as ShipmentInvoicingV0Config;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Configuration as SupplySourcesV20200701Config;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Configuration as TokensV20210301Config;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi as UploadsV20201101Api;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Configuration as UploadsV20201101Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi as VendorDirectFulfillmentInventoryV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Configuration as VendorDirectFulfillmentInventoryV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi as VendorDirectFulfillmentOrdersV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Configuration as VendorDirectFulfillmentOrdersV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi as VendorDirectFulfillmentOrdersV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Configuration as VendorDirectFulfillmentOrdersV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi as VendorDirectFulfillmentPaymentsV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Configuration as VendorDirectFulfillmentPaymentsV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi as VendorDirectFulfillmentSandboxDataV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi as VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Configuration as VendorDirectFulfillmentSandboxDataV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi as VendorDirectFulfillmentShippingV1CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi as VendorDirectFulfillmentShippingV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi as VendorDirectFulfillmentShippingV1LabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Configuration as VendorDirectFulfillmentShippingV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi as VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi as VendorDirectFulfillmentShippingV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi as VendorDirectFulfillmentShippingV20211228LabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Configuration as VendorDirectFulfillmentShippingV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi as VendorDirectFulfillmentTransactionsV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Configuration as VendorDirectFulfillmentTransactionsV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi as VendorDirectFulfillmentTransactionsV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Configuration as VendorDirectFulfillmentTransactionsV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi as VendorTransactionStatusV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Configuration as VendorTransactionStatusV1Config;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;

interface ClientFactoryInterface
{
    /**
     * @return AplusContentV20201101Api
     * @throws LwaAccessTokenException
     */
    public function createAplusContentV20201101ApiClient(
        AplusContentV20201101Config $domainConfig = null
    );

    /**
     * @return AuthorizationV1Api
     * @throws LwaAccessTokenException
     */
    public function createAuthorizationV1ApiClient(
        AuthorizationV1Config $domainConfig = null
    );

    /**
     * @return CatalogItemsV0Api
     * @throws LwaAccessTokenException
     */
    public function createCatalogItemsV0ApiClient(
        CatalogItemsV0Config $domainConfig = null
    );

    /**
     * @return CatalogItemsV20201201Api
     * @throws LwaAccessTokenException
     */
    public function createCatalogItemsV20201201ApiClient(
        CatalogItemsV20201201Config $domainConfig = null
    );

    /**
     * @return DefinitionsProductTypesV20200901Api
     * @throws LwaAccessTokenException
     */
    public function createDefinitionsProductTypesV20200901ApiClient(
        DefinitionsProductTypesV20200901Config $domainConfig = null
    );

    /**
     * @return EasyShipV20220323Api
     * @throws LwaAccessTokenException
     */
    public function createEasyShipV20220323ApiClient(
        EasyShipV20220323Config $domainConfig = null
    );

    /**
     * @return FbaInboundEligibilityV1Api
     * @throws LwaAccessTokenException
     */
    public function createFbaInboundEligibilityV1ApiClient(
        FbaInboundEligibilityV1Config $domainConfig = null
    );

    /**
     * @return FbaInventoryV1Api
     * @throws LwaAccessTokenException
     */
    public function createFbaInventoryV1ApiClient(
        FbaInventoryV1Config $domainConfig = null
    );

    /**
     * @return FbaSmallAndLightV1Api
     * @throws LwaAccessTokenException
     */
    public function createFbaSmallAndLightV1ApiClient(
        FbaSmallAndLightV1Config $domainConfig = null
    );

    /**
     * @return FeedsV20200904Api
     * @throws LwaAccessTokenException
     */
    public function createFeedsV20200904ApiClient(
        FeedsV20200904Config $domainConfig = null
    );

    /**
     * @return FeedsV20210630Api
     * @throws LwaAccessTokenException
     */
    public function createFeedsV20210630ApiClient(
        FeedsV20210630Config $domainConfig = null
    );

    /**
     * @return FinancesV0Api
     * @throws LwaAccessTokenException
     */
    public function createFinancesV0ApiClient(
        FinancesV0Config $domainConfig = null
    );

    /**
     * @return FulfillmentInboundV0Api
     * @throws LwaAccessTokenException
     */
    public function createFulfillmentInboundV0ApiClient(
        FulfillmentInboundV0Config $domainConfig = null
    );

    /**
     * @return FulfillmentOutboundV20200701Api
     * @throws LwaAccessTokenException
     */
    public function createFulfillmentOutboundV20200701ApiClient(
        FulfillmentOutboundV20200701Config $domainConfig = null
    );

    /**
     * @return ListingsItemsV20200901Api
     * @throws LwaAccessTokenException
     */
    public function createListingsItemsV20200901ApiClient(
        ListingsItemsV20200901Config $domainConfig = null
    );

    /**
     * @return ListingsItemsV20210801Api
     * @throws LwaAccessTokenException
     */
    public function createListingsItemsV20210801ApiClient(
        ListingsItemsV20210801Config $domainConfig = null
    );

    /**
     * @return ListingsRestrictionsV20210801Api
     * @throws LwaAccessTokenException
     */
    public function createListingsRestrictionsV20210801ApiClient(
        ListingsRestrictionsV20210801Config $domainConfig = null
    );

    /**
     * @return MerchantFulfillmentV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createMerchantFulfillmentV0ApiClient(
        MerchantFulfillmentV0Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return NotificationsV1Api
     * @throws LwaAccessTokenException
     */
    public function createNotificationsV1ApiClient(
        NotificationsV1Config $domainConfig = null
    );

    /**
     * @return OrdersV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createOrdersV0ApiClient(
        OrdersV0Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return OrdersV0ShipmentApi
     * @throws LwaAccessTokenException
     */
    public function createOrdersV0ShipmentApiClient(
        OrdersV0Config $domainConfig = null
    );

    /**
     * @return ProductFeesV0Api
     * @throws LwaAccessTokenException
     */
    public function createProductFeesV0ApiClient(
        ProductFeesV0Config $domainConfig = null
    );

    /**
     * @return ProductPricingV0Api
     * @throws LwaAccessTokenException
     */
    public function createProductPricingV0ApiClient(
        ProductPricingV0Config $domainConfig = null
    );

    /**
     * @return ReplenishmentV20221107OffersApi
     * @throws LwaAccessTokenException
     */
    public function createReplenishmentV20221107OffersApiClient(
        ReplenishmentV20221107Config $domainConfig = null
    );

    /**
     * @return ReplenishmentV20221107SellingpartnersApi
     * @throws LwaAccessTokenException
     */
    public function createReplenishmentV20221107SellingpartnersApiClient(
        ReplenishmentV20221107Config $domainConfig = null
    );

    /**
     * @return ReportsV20200904Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createReportsV20200904ApiClient(
        ReportsV20200904Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return ReportsV20210630Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createReportsV20210630ApiClient(
        ReportsV20210630Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return SalesV1Api
     * @throws LwaAccessTokenException
     */
    public function createSalesV1ApiClient(
        SalesV1Config $domainConfig = null
    );

    /**
     * @return SellersV1Api
     * @throws LwaAccessTokenException
     */
    public function createSellersV1ApiClient(
        SellersV1Config $domainConfig = null
    );

    /**
     * @return ServicesV1Api
     * @throws LwaAccessTokenException
     */
    public function createServicesV1ApiClient(
        ServicesV1Config $domainConfig = null
    );

    /**
     * @return ShipmentInvoicingV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createShipmentInvoicingV0ApiClient(
        ShipmentInvoicingV0Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return SupplySourcesV20200701Api
     * @throws LwaAccessTokenException
     */
    public function createSupplySourcesV20200701ApiClient(
        SupplySourcesV20200701Config $domainConfig = null
    );

    /**
     * @return TokensV20210301Api
     * @throws LwaAccessTokenException
     */
    public function createTokensV20210301ApiClient(
        TokensV20210301Config $domainConfig = null
    );

    /**
     * @return UploadsV20201101Api
     * @throws LwaAccessTokenException
     */
    public function createUploadsV20201101ApiClient(
        UploadsV20201101Config $domainConfig = null
    );

    /**
     * @return VendorDirectFulfillmentInventoryV1Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentInventoryV1ApiClient(
        VendorDirectFulfillmentInventoryV1Config $domainConfig = null
    );

    /**
     * @return VendorDirectFulfillmentOrdersV1Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentOrdersV1ApiClient(
        VendorDirectFulfillmentOrdersV1Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return VendorDirectFulfillmentOrdersV20211228Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentOrdersV20211228ApiClient(
        VendorDirectFulfillmentOrdersV20211228Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return VendorDirectFulfillmentPaymentsV1Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentPaymentsV1ApiClient(
        VendorDirectFulfillmentPaymentsV1Config $domainConfig = null
    );

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentSandboxDataV20211228ApiClient(
        VendorDirectFulfillmentSandboxDataV20211228Config $domainConfig = null
    );

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient(
        VendorDirectFulfillmentSandboxDataV20211228Config $domainConfig = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV1CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient(
        VendorDirectFulfillmentShippingV1Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV1Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1ApiClient(
        VendorDirectFulfillmentShippingV1Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV1LabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1LabelsApiClient(
        VendorDirectFulfillmentShippingV1Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient(
        VendorDirectFulfillmentShippingV20211228Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228ApiClient(
        VendorDirectFulfillmentShippingV20211228Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228LabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228LabelsApiClient(
        VendorDirectFulfillmentShippingV20211228Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return VendorDirectFulfillmentTransactionsV1Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentTransactionsV1ApiClient(
        VendorDirectFulfillmentTransactionsV1Config $domainConfig = null
    );

    /**
     * @return VendorDirectFulfillmentTransactionsV20211228Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentTransactionsV20211228ApiClient(
        VendorDirectFulfillmentTransactionsV20211228Config $domainConfig = null
    );

    /**
     * @return VendorTransactionStatusV1Api
     * @throws LwaAccessTokenException
     */
    public function createVendorTransactionStatusV1ApiClient(
        VendorTransactionStatusV1Config $domainConfig = null
    );
}
