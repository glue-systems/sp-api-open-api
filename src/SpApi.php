<?php

namespace Glue\SpApi\OpenAPI;

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
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\DomainApiException;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryInterface;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\Services\Rdt\RdtServiceInterface;
use Glue\SpApi\OpenAPI\Utilities\ClientBuilder;
use Glue\SpApi\OpenAPI\Utilities\SpApiRoster;

/**
 * SP-API execution class, which should be instantiated once per SP-API call
 * without persistence as a singleton.
 */
class SpApi
{
    /**
     * @var ClientFactoryInterface
     */
    protected $clientFactory;

    /**
     * @var RdtServiceInterface
     */
    protected $rdtService;

    /**
     * @var LwaServiceInterface
     */
    protected $lwaService;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    /**
     * @var CreateRestrictedDataTokenRequest|null
     */
    protected $rdtRequest = null;

    /**
     * @var callable|null
     */
    protected $builderCallback = null;

    public function __construct(
        ClientFactoryInterface $clientFactory,
        RdtServiceInterface $rdtService,
        LwaServiceInterface $lwaService,
        SpApiConfig $spApiConfig
    ) {
        $this->clientFactory = $clientFactory;
        $this->rdtService    = $rdtService;
        $this->lwaService    = $lwaService;
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
     * Set a Restricted Data Token (RDT) request to be used for this SP-API execution.
     *
     * @return static
     */
    public function withRdtRequest(CreateRestrictedDataTokenRequest $rdtRequest)
    {
        $this->rdtRequest = $rdtRequest;
        return $this;
    }

    /**
     * Set a builder callback for modifying the ClientBuilder instance that
     * is used to construct the SP-API client.
     *
     * @return static
     */
    public function buildUsing(callable $builderCallback)
    {
        $this->builderCallback = $builderCallback;
        return $this;
    }

    /**
     * @return AplusContentV20201101Api
     * @throws LwaAccessTokenException
     */
    public function aplusContentV20201101(callable $execute)
    {
        return $this->_execute(
            'createAplusContentV20201101ApiClient',
            $execute
        );
    }

    /**
     * @return AuthorizationV1Api
     * @throws LwaAccessTokenException
     */
    public function authorizationV1(callable $execute)
    {
        return $this->_execute(
            'createAuthorizationV1ApiClient',
            $execute
        );
    }

    /**
     * @return CatalogItemsV0Api
     * @throws LwaAccessTokenException
     */
    public function catalogItemsV0(callable $execute)
    {
        return $this->_execute(
            'createCatalogItemsV0ApiClient',
            $execute
        );
    }

    /**
     * @return CatalogItemsV20201201Api
     * @throws LwaAccessTokenException
     */
    public function catalogItemsV20201201(callable $execute)
    {
        return $this->_execute(
            'createCatalogItemsV20201201ApiClient',
            $execute
        );
    }

    /**
     * @return DefinitionsProductTypesV20200901Api
     * @throws LwaAccessTokenException
     */
    public function definitionsProductTypesV20200901(callable $execute)
    {
        return $this->_execute(
            'createDefinitionsProductTypesV20200901ApiClient',
            $execute
        );
    }

    /**
     * @return EasyShipV20220323Api
     * @throws LwaAccessTokenException
     */
    public function easyShipV20220323(callable $execute)
    {
        return $this->_execute(
            'createEasyShipV20220323ApiClient',
            $execute
        );
    }

    /**
     * @return FbaInboundEligibilityV1Api
     * @throws LwaAccessTokenException
     */
    public function fbaInboundEligibilityV1(callable $execute)
    {
        return $this->_execute(
            'createFbaInboundEligibilityV1ApiClient',
            $execute
        );
    }

    /**
     * @return FbaInventoryV1Api
     * @throws LwaAccessTokenException
     */
    public function fbaInventoryV1(callable $execute)
    {
        return $this->_execute(
            'createFbaInventoryV1ApiClient',
            $execute
        );
    }

    /**
     * @return FbaSmallAndLightV1Api
     * @throws LwaAccessTokenException
     */
    public function fbaSmallAndLightV1(callable $execute)
    {
        return $this->_execute(
            'createFbaSmallAndLightV1ApiClient',
            $execute
        );
    }

    /**
     * @return FeedsV20200904Api
     * @throws LwaAccessTokenException
     */
    public function feedsV20200904(callable $execute)
    {
        return $this->_execute(
            'createFeedsV20200904ApiClient',
            $execute
        );
    }

    /**
     * @return FeedsV20210630Api
     * @throws LwaAccessTokenException
     */
    public function feedsV20210630(callable $execute)
    {
        return $this->_execute(
            'createFeedsV20210630ApiClient',
            $execute
        );
    }

    /**
     * @return FinancesV0Api
     * @throws LwaAccessTokenException
     */
    public function financesV0(callable $execute)
    {
        return $this->_execute(
            'createFinancesV0ApiClient',
            $execute
        );
    }

    /**
     * @return FulfillmentInboundV0Api
     * @throws LwaAccessTokenException
     */
    public function fulfillmentInboundV0(callable $execute)
    {
        return $this->_execute(
            'createFulfillmentInboundV0ApiClient',
            $execute
        );
    }

    /**
     * @return FulfillmentOutboundV20200701Api
     * @throws LwaAccessTokenException
     */
    public function fulfillmentOutboundV20200701(callable $execute)
    {
        return $this->_execute(
            'createFulfillmentOutboundV20200701ApiClient',
            $execute
        );
    }

    /**
     * @return ListingsItemsV20200901Api
     * @throws LwaAccessTokenException
     */
    public function listingsItemsV20200901(callable $execute)
    {
        return $this->_execute(
            'createListingsItemsV20200901ApiClient',
            $execute
        );
    }

    /**
     * @return ListingsItemsV20210801Api
     * @throws LwaAccessTokenException
     */
    public function listingsItemsV20210801(callable $execute)
    {
        return $this->_execute(
            'createListingsItemsV20210801ApiClient',
            $execute
        );
    }

    /**
     * @return ListingsRestrictionsV20210801Api
     * @throws LwaAccessTokenException
     */
    public function listingsRestrictionsV20210801(callable $execute)
    {
        return $this->_execute(
            'createListingsRestrictionsV20210801ApiClient',
            $execute
        );
    }

    /**
     * @return MerchantFulfillmentV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function merchantFulfillmentV0(callable $execute)
    {
        return $this->_execute(
            'createMerchantFulfillmentV0ApiClient',
            $execute
        );
    }

    /**
     * @return NotificationsV1Api
     * @throws LwaAccessTokenException
     */
    public function notificationsV1(callable $execute)
    {
        return $this->_execute(
            'createNotificationsV1ApiClient',
            $execute
        );
    }

    /**
     * @return OrdersV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function ordersV0(callable $execute)
    {
        return $this->_execute(
            'createOrdersV0ApiClient',
            $execute
        );
    }

    /**
     * @return OrdersV0ShipmentApi
     * @throws LwaAccessTokenException
     */
    public function ordersV0Shipment(callable $execute)
    {
        return $this->_execute(
            'createOrdersV0ShipmentApiClient',
            $execute
        );
    }

    /**
     * @return ProductFeesV0Api
     * @throws LwaAccessTokenException
     */
    public function productFeesV0(callable $execute)
    {
        return $this->_execute(
            'createProductFeesV0ApiClient',
            $execute
        );
    }

    /**
     * @return ProductPricingV0Api
     * @throws LwaAccessTokenException
     */
    public function productPricingV0(callable $execute)
    {
        return $this->_execute(
            'createProductPricingV0ApiClient',
            $execute
        );
    }

    /**
     * @return ReplenishmentV20221107OffersApi
     * @throws LwaAccessTokenException
     */
    public function replenishmentV20221107Offers(callable $execute)
    {
        return $this->_execute(
            'createReplenishmentV20221107OffersApiClient',
            $execute
        );
    }

    /**
     * @return ReplenishmentV20221107SellingpartnersApi
     * @throws LwaAccessTokenException
     */
    public function replenishmentV20221107Sellingpartners(callable $execute)
    {
        return $this->_execute(
            'createReplenishmentV20221107SellingpartnersApiClient',
            $execute
        );
    }

    /**
     * @return ReportsV20200904Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function reportsV20200904(callable $execute)
    {
        return $this->_execute(
            'createReportsV20200904ApiClient',
            $execute
        );
    }

    /**
     * @return ReportsV20210630Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function reportsV20210630(callable $execute)
    {
        return $this->_execute(
            'createReportsV20210630ApiClient',
            $execute
        );
    }

    /**
     * @return SalesV1Api
     * @throws LwaAccessTokenException
     */
    public function salesV1(callable $execute)
    {
        return $this->_execute(
            'createSalesV1ApiClient',
            $execute
        );
    }

    /**
     * @return SellersV1Api
     * @throws LwaAccessTokenException
     */
    public function sellersV1(callable $execute)
    {
        return $this->_execute(
            'createSellersV1ApiClient',
            $execute
        );
    }

    /**
     * @return ServicesV1Api
     * @throws LwaAccessTokenException
     */
    public function servicesV1(callable $execute)
    {
        return $this->_execute(
            'createServicesV1ApiClient',
            $execute
        );
    }

    /**
     * @return ShipmentInvoicingV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function shipmentInvoicingV0(callable $execute)
    {
        return $this->_execute(
            'createShipmentInvoicingV0ApiClient',
            $execute
        );
    }

    /**
     * @return SupplySourcesV20200701Api
     * @throws LwaAccessTokenException
     */
    public function supplySourcesV20200701(callable $execute)
    {
        return $this->_execute(
            'createSupplySourcesV20200701ApiClient',
            $execute
        );
    }

    /**
     * @return TokensV20210301Api
     * @throws LwaAccessTokenException
     */
    public function tokensV20210301(callable $execute)
    {
        return $this->_execute(
            'createTokensV20210301ApiClient',
            $execute
        );
    }

    /**
     * @return UploadsV20201101Api
     * @throws LwaAccessTokenException
     */
    public function uploadsV20201101(callable $execute)
    {
        return $this->_execute(
            'createUploadsV20201101ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentInventoryV1Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentInventoryV1(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentInventoryV1ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentOrdersV1Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentOrdersV1(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentOrdersV1ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentOrdersV20211228Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentOrdersV20211228(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentOrdersV20211228ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentPaymentsV1Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentPaymentsV1(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentPaymentsV1ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentSandboxDataV20211228(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentSandboxDataV20211228ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentSandboxDataV20211228transactionstatus(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV1CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV1CustomerInvoices(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV1Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV1(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentShippingV1ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV1LabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV1Labels(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentShippingV1LabelsApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV20211228CustomerInvoices(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV20211228Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV20211228(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentShippingV20211228ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentShippingV20211228LabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function vendorDirectFulfillmentShippingV20211228Labels(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentShippingV20211228LabelsApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentTransactionsV1Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentTransactionsV1(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentTransactionsV1ApiClient',
            $execute
        );
    }

    /**
     * @return VendorDirectFulfillmentTransactionsV20211228Api
     * @throws LwaAccessTokenException
     */
    public function vendorDirectFulfillmentTransactionsV20211228(callable $execute)
    {
        return $this->_execute(
            'createVendorDirectFulfillmentTransactionsV20211228ApiClient',
            $execute
        );
    }

    /**
     * @return VendorTransactionStatusV1Api
     * @throws LwaAccessTokenException
     */
    public function vendorTransactionStatusV1(callable $execute)
    {
        return $this->_execute(
            'createVendorTransactionStatusV1ApiClient',
            $execute
        );
    }

    /**
     * @param string $clientFactoryMethod
     * @param callable $execute
     * @return mixed
     * @throws DomainApiException
     */
    protected function _execute(
        $clientFactoryMethod,
        callable $execute
    ) {
        try {
            return $this->_invokeExecuteCallback($clientFactoryMethod, $execute);
        } catch (DomainApiException $ex) {
            if ($ex->getCode() === 403) {
                $this->lwaService->forgetCachedLwaAccessToken();
                return $this->_invokeExecuteCallback($clientFactoryMethod, $execute);
            }
            throw $ex;
        }
    }

    /**
     * @param string $clientFactoryMethod
     * @param callable $execute
     * @return mixed
     * @throws DomainApiException
     */
    protected function _invokeExecuteCallback(
        $clientFactoryMethod,
        callable $execute
    ) {
        try {
            $apiClient = $this->_createApiClient($clientFactoryMethod);
            return $execute($apiClient);
        } catch (\Exception $ex) {
            if (SpApiRoster::isApiException($ex)) {
                throw new DomainApiException(
                    $ex,
                    $this->spApiConfig->alwaysUnpackApiExceptionResponseBody
                );
            }
            throw $ex;
        }
    }

    /**
     * @param string $clientFactoryMethod
     * @return callable
     */
    protected function _createApiClient($clientFactoryMethod)
    {
        if ($this->rdtRequest) {
            $builderCallback = $this->_enhanceBuilderCallbackWithRdtProvider(
                $this->rdtRequest,
                $this->builderCallback
            );
        } else {
            $builderCallback = $this->builderCallback;
        }

        return $this->clientFactory->{$clientFactoryMethod}($builderCallback);
    }

    /**
     * @param CreateRestrictedDataTokenRequest $rdtRequest
     * @param callable|null $build
     * @return callable
     */
    protected function _enhanceBuilderCallbackWithRdtProvider(
        CreateRestrictedDataTokenRequest $rdtRequest,
        callable $builderCallback = null
    ) {
        // TODO: In a future version, may be useful to implement some sort of
        // "BuilderMiddleware" pattern, which could be provided globally and/or
        // on each SP-API execution. This would play nicely in the Laravel package,
        // where BuilderMiddleware can be registered via SpApiServiceProvider.
        return function (ClientBuilder $clientBuilder) use ($builderCallback, $rdtRequest) {
            $rdtProvider = $this->rdtService->makeRdtProviderFromRequest($rdtRequest);
            $clientBuilder->withRdtProvider($rdtProvider);
            if ($builderCallback) {
                call_user_func($builderCallback, $clientBuilder);
            }
        };
    }
}
