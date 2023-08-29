<?php

namespace Glue\SpApi\OpenAPI;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\DomainApiException;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Middleware\Builder\RequestRdtMiddleware;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryInterface;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\Services\Rdt\RdtServiceInterface;
use Glue\SpApi\OpenAPI\Utilities\BuilderMiddlewarePipeline;
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
     * @var BuilderMiddlewarePipeline
     */
    protected $builderMiddlewarePipeline;

    public function __construct(
        ClientFactoryInterface $clientFactory,
        RdtServiceInterface $rdtService,
        LwaServiceInterface $lwaService,
        SpApiConfig $spApiConfig,
        BuilderMiddlewarePipeline $builderMiddlewarePipeline = null
    ) {
        $this->clientFactory             = $clientFactory;
        $this->rdtService                = $rdtService;
        $this->lwaService                = $lwaService;
        $this->spApiConfig               = $spApiConfig;
        $this->builderMiddlewarePipeline = $builderMiddlewarePipeline
            ?: new BuilderMiddlewarePipeline();
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
        $this->pushBuilderMiddleware(
            new RequestRdtMiddleware($this->rdtService, $rdtRequest),
            RequestRdtMiddleware::MIDDLEWARE_NAME
        );
        return $this;
    }

    /**
     * Push a middleware that will be applied to the ClientBuilder instance that
     * is used to construct the SP-API client.
     *
     * @param callable $middleware
     * @param string|null $name
     * @return static
     */
    public function pushBuilderMiddleware(
        callable $middleware,
        $name = null
    ) {
        $this->builderMiddlewarePipeline->push($middleware, $name);
        return $this;
    }

    /**
     * Add a callback to modify the ClientBuilder instance that is used to construct
     * the SP-API client. This is simply a quicker way to push a new builder
     * middleware onto the pipeline without needing to manage the `next` callback.
     *
     * @param callable $builderCallback Callback 1st parameter is instance of `ClientBuilder`
     * @param string|null $name
     * @return static
     */
    public function buildUsing(
        callable $builderCallback,
        $name = null
    ) {
        $middleware = $this->_wrapBuilderCallbackInMiddleware($builderCallback);

        $this->pushBuilderMiddleware($middleware, $name);
        return $this;
    }

    /**
     * @param callable $execute Callback 1st parameter is instance of `AplusContentApi` (FQN `\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `AuthorizationApi` (FQN `\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `CatalogApi` (FQN `\Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `CatalogApi` (FQN `\Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `DefinitionsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `EasyShipApi` (FQN `\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `FbaInboundApi` (FQN `\Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `FbaInventoryApi` (FQN `\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `SmallAndLightApi` (FQN `\Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `FeedsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `FeedsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `DefaultApi` (FQN `\Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `FbaInboundApi` (FQN `\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `FbaOutboundApi` (FQN `\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ListingsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ListingsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ListingsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `MerchantFulfillmentApi` (FQN `\Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `NotificationsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `OrdersV0Api` (FQN `\Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ShipmentApi` (FQN `\Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `FeesApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ProductPricingApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `OffersApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `SellingpartnersApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ReportsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ReportsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `SalesApi` (FQN `\Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `SellersApi` (FQN `\Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ServiceApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `ShipmentInvoiceApi` (FQN `\Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `SupplySourcesApi` (FQN `\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `TokensApi` (FQN `\Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `UploadsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `UpdateInventoryApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorOrdersApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorOrdersApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorInvoiceApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorDFSandboxApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorDFSandboxtransactionstatusApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `CustomerInvoicesApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorShippingApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorShippingLabelsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `CustomerInvoicesApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorShippingApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorShippingLabelsApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorTransactionApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorTransactionApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi`)
     * @return mixed
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
     * @param callable $execute Callback 1st parameter is instance of `VendorTransactionApi` (FQN `\Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi`)
     * @return mixed
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
            $apiClient = $this->clientFactory->{$clientFactoryMethod}(
                $this->builderMiddlewarePipeline
            );
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

    protected function _wrapBuilderCallbackInMiddleware(
        callable $builderCallback
    ) {
        return function (callable $next) use ($builderCallback) {
            return function (ClientBuilder $builder) use ($builderCallback, $next) {
                $builderCallback($builder);
                return $next($builder);
            };
        };
    }
}
