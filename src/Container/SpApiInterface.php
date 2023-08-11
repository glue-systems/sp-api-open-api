<?php

namespace Glue\SpApi\OpenAPI\Container;

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
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\SpApiConfig;

interface SpApiInterface
{
    /**
     * Get the global SP-API config object.
     *
     * @return SpApiConfig
     */
    public function getSpApiConfig();

    /**
     * Wrapper for executing an SP-API operation, which will render any  ApiException's thrown
     * as DomainApiException with unpacked response body
     *
     * @param callable $callback
     * @return mixed
     */
    public function execute(callable $callback);

    /**
     * @return AplusContentV20201101Api
     * @throws LwaAccessTokenException
     */
    public function aplusContentV20201101();

    /**
     * @return AuthorizationV1Api
     * @throws LwaAccessTokenException
     */
    public function authorizationV1();

    /**
     * @return CatalogItemsV0Api
     * @throws LwaAccessTokenException
     */
    public function catalogItemsV0();

    /**
     * @return CatalogItemsV20201201Api
     * @throws LwaAccessTokenException
     */
    public function catalogItemsV20201201();

    /**
     * @return DefinitionsProductTypesV20200901Api
     * @throws LwaAccessTokenException
     */
    public function definitionsProductTypesV20200901();

    /**
     * @return EasyShipV20220323Api
     * @throws LwaAccessTokenException
     */
    public function easyShipV20220323();

    /**
     * @return FbaInboundEligibilityV1Api
     * @throws LwaAccessTokenException
     */
    public function fbaInboundEligibilityV1();

    /**
     * @return FbaInventoryV1Api
     * @throws LwaAccessTokenException
     */
    public function fbaInventoryV1();

    /**
     * @return FbaSmallAndLightV1Api
     * @throws LwaAccessTokenException
     */
    public function fbaSmallAndLightV1();

    /**
     * @return FeedsV20200904Api
     * @throws LwaAccessTokenException
     */
    public function feedsV20200904();

    /**
     * @return FeedsV20210630Api
     * @throws LwaAccessTokenException
     */
    public function feedsV20210630();

    /**
     * @return FinancesV0Api
     * @throws LwaAccessTokenException
     */
    public function financesV0();

    /**
     * @return FulfillmentInboundV0Api
     * @throws LwaAccessTokenException
     */
    public function fulfillmentInboundV0();

    /**
     * @return FulfillmentOutboundV20200701Api
     * @throws LwaAccessTokenException
     */
    public function fulfillmentOutboundV20200701();

    /**
     * @return ListingsItemsV20200901Api
     * @throws LwaAccessTokenException
     */
    public function listingsItemsV20200901();

    /**
     * @return ListingsItemsV20210801Api
     * @throws LwaAccessTokenException
     */
    public function listingsItemsV20210801();

    /**
     * @return ListingsRestrictionsV20210801Api
     * @throws LwaAccessTokenException
     */
    public function listingsRestrictionsV20210801();

    /**
     * @return MerchantFulfillmentV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function merchantFulfillmentV0(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return NotificationsV1Api
     * @throws LwaAccessTokenException
     */
    public function notificationsV1();

    /**
     * @return OrdersV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function ordersV0(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return OrdersV0ShipmentApi
     * @throws LwaAccessTokenException
     */
    public function ordersV0Shipment();

    /**
     * @return ProductFeesV0Api
     * @throws LwaAccessTokenException
     */
    public function productFeesV0();

    /**
     * @return ProductPricingV0Api
     * @throws LwaAccessTokenException
     */
    public function productPricingV0();

    /**
     * @return ReplenishmentV20221107OffersApi
     * @throws LwaAccessTokenException
     */
    public function replenishmentV20221107Offers();

    /**
     * @return ReplenishmentV20221107SellingpartnersApi
     * @throws LwaAccessTokenException
     */
    public function replenishmentV20221107Sellingpartners();

    /**
     * @return ReportsV20200904Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function reportsV20200904(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return ReportsV20210630Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function reportsV20210630(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return SalesV1Api
     * @throws LwaAccessTokenException
     */
    public function salesV1();

    /**
     * @return SellersV1Api
     * @throws LwaAccessTokenException
     */
    public function sellersV1();

    /**
     * @return ServicesV1Api
     * @throws LwaAccessTokenException
     */
    public function servicesV1();

    /**
     * @return ShipmentInvoicingV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function shipmentInvoicingV0(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return SupplySourcesV20200701Api
     * @throws LwaAccessTokenException
     */
    public function supplySourcesV20200701();

    /**
     * @return TokensV20210301Api
     * @throws LwaAccessTokenException
     */
    public function tokensV20210301();

    /**
     * @return UploadsV20201101Api
     * @throws LwaAccessTokenException
     */
    public function uploadsV20201101();

    /**
     * @return VendorDirectFulfillmentInventoryV1Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentInventoryV1();

    /**
     * @return VendorDirectFulfillmentOrdersV1Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentOrdersV1(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return VendorDirectFulfillmentOrdersV20211228Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentOrdersV20211228(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return VendorDirectFulfillmentPaymentsV1Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentPaymentsV1();

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentSandboxDataV20211228();

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentSandboxDataV20211228transactionstatus();

    /**
     * @return VendorDirectFulfillmentShippingV1CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV1CustomerInvoices(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV1Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV1(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV1LabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV1Labels(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV20211228CustomerInvoices(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV20211228(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return VendorDirectFulfillmentShippingV20211228LabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV20211228Labels(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return VendorDirectFulfillmentTransactionsV1Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentTransactionsV1();

    /**
     * @return VendorDirectFulfillmentTransactionsV20211228Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentTransactionsV20211228();

    /**
     * @return VendorTransactionStatusV1Api
     * @throws LwaAccessTokenException
     */
    public function vendorTransactionStatusV1();
}
