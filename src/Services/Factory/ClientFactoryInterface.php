<?php

namespace Glue\SpApi\OpenAPI\Services\Factory;

use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi as AplusContentV20201101Api;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi as AuthorizationV1Api;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi as CatalogItemsV0Api;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi as CatalogItemsV20201201Api;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi as EasyShipV20220323Api;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi as FbaInboundEligibilityV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi as FbaInventoryV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi as FbaSmallAndLightV1Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi as FinancesV0Api;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi as FulfillmentInboundV0Api;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi as FulfillmentOutboundV20200701Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi as ListingsItemsV20210801Api;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi as ListingsRestrictionsV20210801Api;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi as MerchantFulfillmentV0Api;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi as NotificationsV1Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi as ProductFeesV0Api;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi as ProductPricingV0Api;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi as ReplenishmentV20221107OffersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi as ReplenishmentV20221107SellingpartnersApi;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi as SalesV1Api;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi as SellersV1Api;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi as ServicesV1Api;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi as ShipmentInvoicingV0Api;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi as UploadsV20201101Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi as VendorDirectFulfillmentInventoryV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi as VendorDirectFulfillmentOrdersV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi as VendorDirectFulfillmentOrdersV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi as VendorDirectFulfillmentPaymentsV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi as VendorDirectFulfillmentSandboxDataV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi as VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi as VendorDirectFulfillmentShippingV1CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi as VendorDirectFulfillmentShippingV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi as VendorDirectFulfillmentShippingV1LabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi as VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi as VendorDirectFulfillmentShippingV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi as VendorDirectFulfillmentShippingV20211228LabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi as VendorDirectFulfillmentTransactionsV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi as VendorDirectFulfillmentTransactionsV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi as VendorTransactionStatusV1Api;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;

interface ClientFactoryInterface
{
    /**
     * @return AplusContentV20201101Api
     * @throws LwaAccessTokenException
     */
    public function createAplusContentV20201101ApiClient(
        callable $build = null
    );

    /**
     * @return AuthorizationV1Api
     * @throws LwaAccessTokenException
     */
    public function createAuthorizationV1ApiClient(
        callable $build = null
    );

    /**
     * @return CatalogItemsV0Api
     * @throws LwaAccessTokenException
     */
    public function createCatalogItemsV0ApiClient(
        callable $build = null
    );

    /**
     * @return CatalogItemsV20201201Api
     * @throws LwaAccessTokenException
     */
    public function createCatalogItemsV20201201ApiClient(
        callable $build = null
    );

    /**
     * @return DefinitionsProductTypesV20200901Api
     * @throws LwaAccessTokenException
     */
    public function createDefinitionsProductTypesV20200901ApiClient(
        callable $build = null
    );

    /**
     * @return EasyShipV20220323Api
     * @throws LwaAccessTokenException
     */
    public function createEasyShipV20220323ApiClient(
        callable $build = null
    );

    /**
     * @return FbaInboundEligibilityV1Api
     * @throws LwaAccessTokenException
     */
    public function createFbaInboundEligibilityV1ApiClient(
        callable $build = null
    );

    /**
     * @return FbaInventoryV1Api
     * @throws LwaAccessTokenException
     */
    public function createFbaInventoryV1ApiClient(
        callable $build = null
    );

    /**
     * @return FbaSmallAndLightV1Api
     * @throws LwaAccessTokenException
     */
    public function createFbaSmallAndLightV1ApiClient(
        callable $build = null
    );

    /**
     * @return FeedsV20200904Api
     * @throws LwaAccessTokenException
     */
    public function createFeedsV20200904ApiClient(
        callable $build = null
    );

    /**
     * @return FeedsV20210630Api
     * @throws LwaAccessTokenException
     */
    public function createFeedsV20210630ApiClient(
        callable $build = null
    );

    /**
     * @return FinancesV0Api
     * @throws LwaAccessTokenException
     */
    public function createFinancesV0ApiClient(
        callable $build = null
    );

    /**
     * @return FulfillmentInboundV0Api
     * @throws LwaAccessTokenException
     */
    public function createFulfillmentInboundV0ApiClient(
        callable $build = null
    );

    /**
     * @return FulfillmentOutboundV20200701Api
     * @throws LwaAccessTokenException
     */
    public function createFulfillmentOutboundV20200701ApiClient(
        callable $build = null
    );

    /**
     * @return ListingsItemsV20200901Api
     * @throws LwaAccessTokenException
     */
    public function createListingsItemsV20200901ApiClient(
        callable $build = null
    );

    /**
     * @return ListingsItemsV20210801Api
     * @throws LwaAccessTokenException
     */
    public function createListingsItemsV20210801ApiClient(
        callable $build = null
    );

    /**
     * @return ListingsRestrictionsV20210801Api
     * @throws LwaAccessTokenException
     */
    public function createListingsRestrictionsV20210801ApiClient(
        callable $build = null
    );

    /**
     * @return MerchantFulfillmentV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createMerchantFulfillmentV0ApiClient(
        callable $build = null
    );

    /**
     * @return NotificationsV1Api
     * @throws LwaAccessTokenException
     */
    public function createNotificationsV1ApiClient(
        callable $build = null
    );

    /**
     * @return OrdersV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createOrdersV0ApiClient(
        callable $build = null
    );

    /**
     * @return OrdersV0ShipmentApi
     * @throws LwaAccessTokenException
     */
    public function createOrdersV0ShipmentApiClient(
        callable $build = null
    );

    /**
     * @return ProductFeesV0Api
     * @throws LwaAccessTokenException
     */
    public function createProductFeesV0ApiClient(
        callable $build = null
    );

    /**
     * @return ProductPricingV0Api
     * @throws LwaAccessTokenException
     */
    public function createProductPricingV0ApiClient(
        callable $build = null
    );

    /**
     * @return ReplenishmentV20221107OffersApi
     * @throws LwaAccessTokenException
     */
    public function createReplenishmentV20221107OffersApiClient(
        callable $build = null
    );

    /**
     * @return ReplenishmentV20221107SellingpartnersApi
     * @throws LwaAccessTokenException
     */
    public function createReplenishmentV20221107SellingpartnersApiClient(
        callable $build = null
    );

    /**
     * @return ReportsV20200904Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createReportsV20200904ApiClient(
        callable $build = null
    );

    /**
     * @return ReportsV20210630Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createReportsV20210630ApiClient(
        callable $build = null
    );

    /**
     * @return SalesV1Api
     * @throws LwaAccessTokenException
     */
    public function createSalesV1ApiClient(
        callable $build = null
    );

    /**
     * @return SellersV1Api
     * @throws LwaAccessTokenException
     */
    public function createSellersV1ApiClient(
        callable $build = null
    );

    /**
     * @return ServicesV1Api
     * @throws LwaAccessTokenException
     */
    public function createServicesV1ApiClient(
        callable $build = null
    );

    /**
     * @return ShipmentInvoicingV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createShipmentInvoicingV0ApiClient(
        callable $build = null
    );

    /**
     * @return SupplySourcesV20200701Api
     * @throws LwaAccessTokenException
     */
    public function createSupplySourcesV20200701ApiClient(
        callable $build = null
    );

    /**
     * @return TokensV20210301Api
     * @throws LwaAccessTokenException
     */
    public function createTokensV20210301ApiClient(
        callable $build = null
    );

    /**
     * @return UploadsV20201101Api
     * @throws LwaAccessTokenException
     */
    public function createUploadsV20201101ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentInventoryV1Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentInventoryV1ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentOrdersV1Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentOrdersV1ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentOrdersV20211228Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentOrdersV20211228ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentPaymentsV1Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentPaymentsV1ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentSandboxDataV20211228ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV1CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV1Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV1LabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1LabelsApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228LabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228LabelsApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentTransactionsV1Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentTransactionsV1ApiClient(
        callable $build = null
    );

    /**
     * @return VendorDirectFulfillmentTransactionsV20211228Api
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentTransactionsV20211228ApiClient(
        callable $build = null
    );

    /**
     * @return VendorTransactionStatusV1Api
     * @throws LwaAccessTokenException
     */
    public function createVendorTransactionStatusV1ApiClient(
        callable $build = null
    );
}
