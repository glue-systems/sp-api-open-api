<?php

namespace Glue\SpApi\OpenAPI\Container;

use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi as AplusContentV20201101Api;
use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\ApiException as AplusContentV20201101ApiException;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi as AuthorizationV1Api;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\ApiException as AuthorizationV1ApiException;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi as CatalogItemsV0Api;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\ApiException as CatalogItemsV0ApiException;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi as CatalogItemsV20201201Api;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\ApiException as CatalogItemsV20201201ApiException;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\ApiException as DefinitionsProductTypesV20200901ApiException;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi as EasyShipV20220323Api;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\ApiException as EasyShipV20220323ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi as FbaInboundEligibilityV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\ApiException as FbaInboundEligibilityV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi as FbaInventoryV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\ApiException as FbaInventoryV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi as FbaSmallAndLightV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\ApiException as FbaSmallAndLightV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\ApiException as FeedsV20200904ApiException;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\ApiException as FeedsV20210630ApiException;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi as FinancesV0Api;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\ApiException as FinancesV0ApiException;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi as FulfillmentInboundV0Api;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\ApiException as FulfillmentInboundV0ApiException;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi as FulfillmentOutboundV20200701Api;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\ApiException as FulfillmentOutboundV20200701ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\ApiException as ListingsItemsV20200901ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi as ListingsItemsV20210801Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\ApiException as ListingsItemsV20210801ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi as ListingsRestrictionsV20210801Api;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\ApiException as ListingsRestrictionsV20210801ApiException;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi as MerchantFulfillmentV0Api;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\ApiException as MerchantFulfillmentV0ApiException;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi as NotificationsV1Api;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\ApiException as NotificationsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\ApiException as OrdersV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi as ProductFeesV0Api;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\ApiException as ProductFeesV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi as ProductPricingV0Api;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\ApiException as ProductPricingV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi as ReplenishmentV20221107OffersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi as ReplenishmentV20221107SellingpartnersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\ApiException as ReplenishmentV20221107ApiException;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\ApiException as ReportsV20200904ApiException;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\ApiException as ReportsV20210630ApiException;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi as SalesV1Api;
use Glue\SpApi\OpenAPI\Clients\SalesV1\ApiException as SalesV1ApiException;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi as SellersV1Api;
use Glue\SpApi\OpenAPI\Clients\SellersV1\ApiException as SellersV1ApiException;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi as ServicesV1Api;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\ApiException as ServicesV1ApiException;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi as ShipmentInvoicingV0Api;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\ApiException as ShipmentInvoicingV0ApiException;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\ApiException as SupplySourcesV20200701ApiException;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\ApiException as TokensV20210301ApiException;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi as UploadsV20201101Api;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\ApiException as UploadsV20201101ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi as VendorDirectFulfillmentInventoryV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\ApiException as VendorDirectFulfillmentInventoryV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi as VendorDirectFulfillmentOrdersV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\ApiException as VendorDirectFulfillmentOrdersV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi as VendorDirectFulfillmentOrdersV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\ApiException as VendorDirectFulfillmentOrdersV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi as VendorDirectFulfillmentPaymentsV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\ApiException as VendorDirectFulfillmentPaymentsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi as VendorDirectFulfillmentSandboxDataV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi as VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\ApiException as VendorDirectFulfillmentSandboxDataV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi as VendorDirectFulfillmentShippingV1CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi as VendorDirectFulfillmentShippingV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi as VendorDirectFulfillmentShippingV1LabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\ApiException as VendorDirectFulfillmentShippingV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi as VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi as VendorDirectFulfillmentShippingV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi as VendorDirectFulfillmentShippingV20211228LabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\ApiException as VendorDirectFulfillmentShippingV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi as VendorDirectFulfillmentTransactionsV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\ApiException as VendorDirectFulfillmentTransactionsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi as VendorDirectFulfillmentTransactionsV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\ApiException as VendorDirectFulfillmentTransactionsV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi as VendorTransactionStatusV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\ApiException as VendorTransactionStatusV1ApiException;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Exceptions\DomainApiException;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryInterface;
use Glue\SpApi\OpenAPI\Services\Rdt\RestrictedDataTokenProviderInterface;
use Glue\SpApi\OpenAPI\SpApiConfig;
use GuzzleHttp\Psr7\Stream;

class SpApi implements SpApiInterface
{
    /**
     * @var ClientFactoryInterface
     */
    protected $clientFactory;

    /**
     * @var RestrictedDataTokenProviderInterface
     */
    protected $rdtProvider;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    public function __construct(
        ClientFactoryInterface $clientFactory,
        RestrictedDataTokenProviderInterface $rdtProvider,
        SpApiConfig $spApiConfig
    ) {
        $this->clientFactory = $clientFactory;
        $this->rdtProvider   = $rdtProvider;
        $this->spApiConfig   = $spApiConfig;
    }

    /**
     * Get the global SP-API config object.
     *
     * @return SpApiConfig
     */
    public function getSpApiConfig()
    {
        return clone $this->spApiConfig;
    }

    /**
     * Wrapper for executing an SP-API operation, which will render any  ApiException's thrown
     * as DomainApiException with unpacked response body
     *
     * @param callable $callback
     * @return mixed
     */
    public function execute(callable $callback)
    {
        try {
            return $callback();
        } catch (\Exception $ex) {
            if ($this->_shouldThrowDomainApiException($ex)) {
                $this->_throwDomainApiException($ex);
            }
            throw $ex;
        }
    }

    /**
     * @return AplusContentV20201101Api
     */
    public function aplusContentV20201101()
    {
        return $this->clientFactory->createAplusContentV20201101ApiClient();
    }

    /**
     * @return AuthorizationV1Api
     */
    public function authorizationV1()
    {
        return $this->clientFactory->createAuthorizationV1ApiClient();
    }

    /**
     * @return CatalogItemsV0Api
     */
    public function catalogItemsV0()
    {
        return $this->clientFactory->createCatalogItemsV0ApiClient();
    }

    /**
     * @return CatalogItemsV20201201Api
     */
    public function catalogItemsV20201201()
    {
        return $this->clientFactory->createCatalogItemsV20201201ApiClient();
    }

    /**
     * @return DefinitionsProductTypesV20200901Api
     */
    public function definitionsProductTypesV20200901()
    {
        return $this->clientFactory->createDefinitionsProductTypesV20200901ApiClient();
    }

    /**
     * @return EasyShipV20220323Api
     */
    public function easyShipV20220323()
    {
        return $this->clientFactory->createEasyShipV20220323ApiClient();
    }

    /**
     * @return FbaInboundEligibilityV1Api
     */
    public function fbaInboundEligibilityV1()
    {
        return $this->clientFactory->createFbaInboundEligibilityV1ApiClient();
    }

    /**
     * @return FbaInventoryV1Api
     */
    public function fbaInventoryV1()
    {
        return $this->clientFactory->createFbaInventoryV1ApiClient();
    }

    /**
     * @return FbaSmallAndLightV1Api
     */
    public function fbaSmallAndLightV1()
    {
        return $this->clientFactory->createFbaSmallAndLightV1ApiClient();
    }

    /**
     * @return FeedsV20200904Api
     */
    public function feedsV20200904()
    {
        return $this->clientFactory->createFeedsV20200904ApiClient();
    }

    /**
     * @return FeedsV20210630Api
     */
    public function feedsV20210630()
    {
        return $this->clientFactory->createFeedsV20210630ApiClient();
    }

    /**
     * @return FinancesV0Api
     */
    public function financesV0()
    {
        return $this->clientFactory->createFinancesV0ApiClient();
    }

    /**
     * @return FulfillmentInboundV0Api
     */
    public function fulfillmentInboundV0()
    {
        return $this->clientFactory->createFulfillmentInboundV0ApiClient();
    }

    /**
     * @return FulfillmentOutboundV20200701Api
     */
    public function fulfillmentOutboundV20200701()
    {
        return $this->clientFactory->createFulfillmentOutboundV20200701ApiClient();
    }

    /**
     * @return ListingsItemsV20200901Api
     */
    public function listingsItemsV20200901()
    {
        return $this->clientFactory->createListingsItemsV20200901ApiClient();
    }

    /**
     * @return ListingsItemsV20210801Api
     */
    public function listingsItemsV20210801()
    {
        return $this->clientFactory->createListingsItemsV20210801ApiClient();
    }

    /**
     * @return ListingsRestrictionsV20210801Api
     */
    public function listingsRestrictionsV20210801()
    {
        return $this->clientFactory->createListingsRestrictionsV20210801ApiClient();
    }

    /**
     * @return MerchantFulfillmentV0Api
     */
    public function merchantFulfillmentV0(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createMerchantFulfillmentV0ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return NotificationsV1Api
     */
    public function notificationsV1()
    {
        return $this->clientFactory->createNotificationsV1ApiClient();
    }

    /**
     * @return OrdersV0Api
     */
    public function ordersV0(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createOrdersV0ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return OrdersV0ShipmentApi
     */
    public function ordersV0Shipment()
    {
        return $this->clientFactory->createOrdersV0ShipmentApiClient();
    }

    /**
     * @return ProductFeesV0Api
     */
    public function productFeesV0()
    {
        return $this->clientFactory->createProductFeesV0ApiClient();
    }

    /**
     * @return ProductPricingV0Api
     */
    public function productPricingV0()
    {
        return $this->clientFactory->createProductPricingV0ApiClient();
    }

    /**
     * @return ReplenishmentV20221107OffersApi
     */
    public function replenishmentV20221107Offers()
    {
        return $this->clientFactory->createReplenishmentV20221107OffersApiClient();
    }

    /**
     * @return ReplenishmentV20221107SellingpartnersApi
     */
    public function replenishmentV20221107Sellingpartners()
    {
        return $this->clientFactory->createReplenishmentV20221107SellingpartnersApiClient();
    }

    /**
     * @return ReportsV20200904Api
     */
    public function reportsV20200904(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createReportsV20200904ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return ReportsV20210630Api
     */
    public function reportsV20210630(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createReportsV20210630ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return SalesV1Api
     */
    public function salesV1()
    {
        return $this->clientFactory->createSalesV1ApiClient();
    }

    /**
     * @return SellersV1Api
     */
    public function sellersV1()
    {
        return $this->clientFactory->createSellersV1ApiClient();
    }

    /**
     * @return ServicesV1Api
     */
    public function servicesV1()
    {
        return $this->clientFactory->createServicesV1ApiClient();
    }

    /**
     * @return ShipmentInvoicingV0Api
     */
    public function shipmentInvoicingV0(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createShipmentInvoicingV0ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return SupplySourcesV20200701Api
     */
    public function supplySourcesV20200701()
    {
        return $this->clientFactory->createSupplySourcesV20200701ApiClient();
    }

    /**
     * @return TokensV20210301Api
     */
    public function tokensV20210301()
    {
        return $this->clientFactory->createTokensV20210301ApiClient();
    }

    /**
     * @return UploadsV20201101Api
     */
    public function uploadsV20201101()
    {
        return $this->clientFactory->createUploadsV20201101ApiClient();
    }

    /**
     * @return VendorDirectFulfillmentInventoryV1Api
     */
    public function vendorDirectFulfillmentInventoryV1()
    {
        return $this->clientFactory->createVendorDirectFulfillmentInventoryV1ApiClient();
    }

    /**
     * @return VendorDirectFulfillmentOrdersV1Api
     */
    public function vendorDirectFulfillmentOrdersV1(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createVendorDirectFulfillmentOrdersV1ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return VendorDirectFulfillmentOrdersV20211228Api
     */
    public function vendorDirectFulfillmentOrdersV20211228(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createVendorDirectFulfillmentOrdersV20211228ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return VendorDirectFulfillmentPaymentsV1Api
     */
    public function vendorDirectFulfillmentPaymentsV1()
    {
        return $this->clientFactory->createVendorDirectFulfillmentPaymentsV1ApiClient();
    }

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228Api
     */
    public function vendorDirectFulfillmentSandboxDataV20211228()
    {
        return $this->clientFactory->createVendorDirectFulfillmentSandboxDataV20211228ApiClient();
    }

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi
     */
    public function vendorDirectFulfillmentSandboxDataV20211228transactionstatus()
    {
        return $this->clientFactory->createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient();
    }

    /**
     * @return VendorDirectFulfillmentShippingV1CustomerInvoicesApi
     */
    public function vendorDirectFulfillmentShippingV1CustomerInvoices(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV1Api
     */
    public function vendorDirectFulfillmentShippingV1(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createVendorDirectFulfillmentShippingV1ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV1LabelsApi
     */
    public function vendorDirectFulfillmentShippingV1Labels(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createVendorDirectFulfillmentShippingV1LabelsApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi
     */
    public function vendorDirectFulfillmentShippingV20211228CustomerInvoices(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV20211228Api
     */
    public function vendorDirectFulfillmentShippingV20211228(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createVendorDirectFulfillmentShippingV20211228ApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV20211228LabelsApi
     */
    public function vendorDirectFulfillmentShippingV20211228Labels(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->clientFactory->createVendorDirectFulfillmentShippingV20211228LabelsApiClient(
            null,
            $this->_resolveRdtProvider($rdtRequest)
        );
    }

    /**
     * @return VendorDirectFulfillmentTransactionsV1Api
     */
    public function vendorDirectFulfillmentTransactionsV1()
    {
        return $this->clientFactory->createVendorDirectFulfillmentTransactionsV1ApiClient();
    }

    /**
     * @return VendorDirectFulfillmentTransactionsV20211228Api
     */
    public function vendorDirectFulfillmentTransactionsV20211228()
    {
        return $this->clientFactory->createVendorDirectFulfillmentTransactionsV20211228ApiClient();
    }

    /**
     * @return VendorTransactionStatusV1Api
     */
    public function vendorTransactionStatusV1()
    {
        return $this->clientFactory->createVendorTransactionStatusV1ApiClient();
    }

    /**
     * @param CreateRestrictedDataTokenRequest|null $rdtRequest
     * @return callable|null
     */
    protected function _resolveRdtProvider(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        if (is_null($rdtRequest)) {
            return null;
        }
        return $this->rdtProvider->fromRdtRequest($rdtRequest);
    }

    /**
     * @param \Exception $ex
     * @return bool
     */
    protected function _shouldThrowDomainApiException($ex)
    {
        if ($ex instanceof DomainApiException) {
            return false;
        }

        return SpApiRoster::isApiException($ex);
    }

    /**
     * @param AplusContentV20201101ApiException|AuthorizationV1ApiException|CatalogItemsV0ApiException|CatalogItemsV20201201ApiException|DefinitionsProductTypesV20200901ApiException|EasyShipV20220323ApiException|FbaInboundEligibilityV1ApiException|FbaInventoryV1ApiException|FbaSmallAndLightV1ApiException|FeedsV20200904ApiException|FeedsV20210630ApiException|FinancesV0ApiException|FulfillmentInboundV0ApiException|FulfillmentOutboundV20200701ApiException|ListingsItemsV20200901ApiException|ListingsItemsV20210801ApiException|ListingsRestrictionsV20210801ApiException|MerchantFulfillmentV0ApiException|NotificationsV1ApiException|OrdersV0ApiException|ProductFeesV0ApiException|ProductPricingV0ApiException|ReplenishmentV20221107ApiException|ReportsV20200904ApiException|ReportsV20210630ApiException|SalesV1ApiException|SellersV1ApiException|ServicesV1ApiException|ShipmentInvoicingV0ApiException|SupplySourcesV20200701ApiException|TokensV20210301ApiException|UploadsV20201101ApiException|VendorDirectFulfillmentInventoryV1ApiException|VendorDirectFulfillmentOrdersV1ApiException|VendorDirectFulfillmentOrdersV20211228ApiException|VendorDirectFulfillmentPaymentsV1ApiException|VendorDirectFulfillmentSandboxDataV20211228ApiException|VendorDirectFulfillmentShippingV1ApiException|VendorDirectFulfillmentShippingV20211228ApiException|VendorDirectFulfillmentTransactionsV1ApiException|VendorDirectFulfillmentTransactionsV20211228ApiException|VendorTransactionStatusV1ApiException $ex
     * @return void
     * @throws DomainApiException
     */
    protected function _throwDomainApiException($ex)
    {
        $message = $ex->getMessage();
        if ($unpackedResponseBody = $this->_unpackApiExceptionResponseBody($ex)) {
            $message .= " RESPONSE BODY: $unpackedResponseBody";
        }

        throw new DomainApiException($message, $ex->getCode(), $ex);
    }

    /**
     * @param AplusContentV20201101ApiException|AuthorizationV1ApiException|CatalogItemsV0ApiException|CatalogItemsV20201201ApiException|DefinitionsProductTypesV20200901ApiException|EasyShipV20220323ApiException|FbaInboundEligibilityV1ApiException|FbaInventoryV1ApiException|FbaSmallAndLightV1ApiException|FeedsV20200904ApiException|FeedsV20210630ApiException|FinancesV0ApiException|FulfillmentInboundV0ApiException|FulfillmentOutboundV20200701ApiException|ListingsItemsV20200901ApiException|ListingsItemsV20210801ApiException|ListingsRestrictionsV20210801ApiException|MerchantFulfillmentV0ApiException|NotificationsV1ApiException|OrdersV0ApiException|ProductFeesV0ApiException|ProductPricingV0ApiException|ReplenishmentV20221107ApiException|ReportsV20200904ApiException|ReportsV20210630ApiException|SalesV1ApiException|SellersV1ApiException|ServicesV1ApiException|ShipmentInvoicingV0ApiException|SupplySourcesV20200701ApiException|TokensV20210301ApiException|UploadsV20201101ApiException|VendorDirectFulfillmentInventoryV1ApiException|VendorDirectFulfillmentOrdersV1ApiException|VendorDirectFulfillmentOrdersV20211228ApiException|VendorDirectFulfillmentPaymentsV1ApiException|VendorDirectFulfillmentSandboxDataV20211228ApiException|VendorDirectFulfillmentShippingV1ApiException|VendorDirectFulfillmentShippingV20211228ApiException|VendorDirectFulfillmentTransactionsV1ApiException|VendorDirectFulfillmentTransactionsV20211228ApiException|VendorTransactionStatusV1ApiException $ex
     * @return string
     */
    protected function _unpackApiExceptionResponseBody($ex)
    {
        $body = $ex->getResponseBody();

        if ($body instanceof Stream) {
            $contents = $body->getContents();
        } elseif (!empty($body) && is_string($body)) {
            $contents = $body;
        } else {
            $contents = '';
        }

        return $contents;
    }
}
