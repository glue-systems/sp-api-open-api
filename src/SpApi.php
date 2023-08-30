<?php

namespace Glue\SpApi\OpenAPI;

use Exception;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\DomainApiException;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Exceptions\SpApiResolutionException;
use Glue\SpApi\OpenAPI\Middleware\Builder\RequestRdtMiddleware;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryInterface;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\Services\Rdt\RdtServiceInterface;
use Glue\SpApi\OpenAPI\Utilities\BuilderMiddlewarePipeline;
use Glue\SpApi\OpenAPI\Utilities\ClientBuilder;
use Glue\SpApi\OpenAPI\Utilities\SpApiRoster;
use ReflectionFunction;

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
     * @var string|null
     */
    protected $apiClassToExecute = null;

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
     * @param callable $execute
     * @return mixed
     * @throws DomainApiException|LwaAccessTokenException|RestrictedDataTokenException
     */
    public function execute(callable $execute)
    {
        $clientFactoryMethod = $this->_resolveClientFactoryMethod($execute);
        try {
            return $this->_invokeExecuteCallback($clientFactoryMethod, $execute);
        } catch (DomainApiException $ex) {
            return $this->_tryAgainIf403OrThrow($ex, $clientFactoryMethod, $execute);
        } catch (RestrictedDataTokenException $ex) {
            return $this->_tryAgainIf403OrThrow($ex, $clientFactoryMethod, $execute);
        }
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
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (AplusContentApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function aplusContentV20201101()
    {
        $this->apiClassToExecute = Clients\AplusContentV20201101\Api\AplusContentApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (AuthorizationApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function authorizationV1()
    {
        $this->apiClassToExecute = Clients\AuthorizationV1\Api\AuthorizationApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (CatalogApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function catalogItemsV0()
    {
        $this->apiClassToExecute = Clients\CatalogItemsV0\Api\CatalogApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (CatalogApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function catalogItemsV20201201()
    {
        $this->apiClassToExecute = Clients\CatalogItemsV20201201\Api\CatalogApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (DefinitionsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function definitionsProductTypesV20200901()
    {
        $this->apiClassToExecute = Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (EasyShipApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function easyShipV20220323()
    {
        $this->apiClassToExecute = Clients\EasyShipV20220323\Api\EasyShipApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (FbaInboundApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function fbaInboundEligibilityV1()
    {
        $this->apiClassToExecute = Clients\FbaInboundEligibilityV1\Api\FbaInboundApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (FbaInventoryApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function fbaInventoryV1()
    {
        $this->apiClassToExecute = Clients\FbaInventoryV1\Api\FbaInventoryApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (SmallAndLightApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function fbaSmallAndLightV1()
    {
        $this->apiClassToExecute = Clients\FbaSmallAndLightV1\Api\SmallAndLightApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (FeedsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function feedsV20200904()
    {
        $this->apiClassToExecute = Clients\FeedsV20200904\Api\FeedsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (FeedsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function feedsV20210630()
    {
        $this->apiClassToExecute = Clients\FeedsV20210630\Api\FeedsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (DefaultApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function financesV0()
    {
        $this->apiClassToExecute = Clients\FinancesV0\Api\DefaultApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (FbaInboundApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function fulfillmentInboundV0()
    {
        $this->apiClassToExecute = Clients\FulfillmentInboundV0\Api\FbaInboundApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (FbaOutboundApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function fulfillmentOutboundV20200701()
    {
        $this->apiClassToExecute = Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ListingsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function listingsItemsV20200901()
    {
        $this->apiClassToExecute = Clients\ListingsItemsV20200901\Api\ListingsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ListingsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function listingsItemsV20210801()
    {
        $this->apiClassToExecute = Clients\ListingsItemsV20210801\Api\ListingsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ListingsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function listingsRestrictionsV20210801()
    {
        $this->apiClassToExecute = Clients\ListingsRestrictionsV20210801\Api\ListingsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (MerchantFulfillmentApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function merchantFulfillmentV0()
    {
        $this->apiClassToExecute = Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (NotificationsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function notificationsV1()
    {
        $this->apiClassToExecute = Clients\NotificationsV1\Api\NotificationsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (OrdersV0Api $apiClient) { ... })`)
     *
     * @return static
     */
    public function ordersV0()
    {
        $this->apiClassToExecute = Clients\OrdersV0\Api\OrdersV0Api::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ShipmentApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function ordersV0Shipment()
    {
        $this->apiClassToExecute = Clients\OrdersV0\Api\ShipmentApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (FeesApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function productFeesV0()
    {
        $this->apiClassToExecute = Clients\ProductFeesV0\Api\FeesApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ProductPricingApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function productPricingV0()
    {
        $this->apiClassToExecute = Clients\ProductPricingV0\Api\ProductPricingApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (OffersApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function replenishmentV20221107Offers()
    {
        $this->apiClassToExecute = Clients\ReplenishmentV20221107\Api\OffersApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (SellingpartnersApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function replenishmentV20221107Sellingpartners()
    {
        $this->apiClassToExecute = Clients\ReplenishmentV20221107\Api\SellingpartnersApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ReportsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function reportsV20200904()
    {
        $this->apiClassToExecute = Clients\ReportsV20200904\Api\ReportsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ReportsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function reportsV20210630()
    {
        $this->apiClassToExecute = Clients\ReportsV20210630\Api\ReportsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (SalesApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function salesV1()
    {
        $this->apiClassToExecute = Clients\SalesV1\Api\SalesApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (SellersApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function sellersV1()
    {
        $this->apiClassToExecute = Clients\SellersV1\Api\SellersApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ServiceApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function servicesV1()
    {
        $this->apiClassToExecute = Clients\ServicesV1\Api\ServiceApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (ShipmentInvoiceApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function shipmentInvoicingV0()
    {
        $this->apiClassToExecute = Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (SupplySourcesApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function supplySourcesV20200701()
    {
        $this->apiClassToExecute = Clients\SupplySourcesV20200701\Api\SupplySourcesApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (TokensApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function tokensV20210301()
    {
        $this->apiClassToExecute = Clients\TokensV20210301\Api\TokensApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (UploadsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function uploadsV20201101()
    {
        $this->apiClassToExecute = Clients\UploadsV20201101\Api\UploadsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (UpdateInventoryApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentInventoryV1()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorOrdersApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentOrdersV1()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorOrdersApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentOrdersV20211228()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorInvoiceApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentPaymentsV1()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorDFSandboxApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentSandboxDataV20211228()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorDFSandboxtransactionstatusApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentSandboxDataV20211228transactionstatus()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (CustomerInvoicesApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentShippingV1CustomerInvoices()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorShippingApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentShippingV1()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorShippingLabelsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentShippingV1Labels()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (CustomerInvoicesApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentShippingV20211228CustomerInvoices()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorShippingApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentShippingV20211228()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorShippingLabelsApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentShippingV20211228Labels()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorTransactionApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentTransactionsV1()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorTransactionApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorDirectFulfillmentTransactionsV20211228()
    {
        $this->apiClassToExecute = Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi::class;
        return $this;
    }

    /**
     * Set target API to `\Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi`.
     * For a simpler syntax, you can also remove this setter, type-hint this class
     * in the `execute` callback, and let the authenticated Api client object be injected
     * for you. (E.g. `sp_api()->execute(function (VendorTransactionApi $apiClient) { ... })`)
     *
     * @return static
     */
    public function vendorTransactionStatusV1()
    {
        $this->apiClassToExecute = Clients\VendorTransactionStatusV1\Api\VendorTransactionApi::class;
        return $this;
    }

    protected function _resolveClientFactoryMethod(callable $execute)
    {
        if (isset($this->apiClassToExecute)) {
            return SpApiRoster::getFactoryMethodFromApiClassFqn($this->apiClassToExecute);
        }

        return $this->_resolveClientFactoryMethodViaReflection($execute);
    }

    protected function _resolveClientFactoryMethodViaReflection(callable $execute)
    {
        $reflector = new ReflectionFunction($execute);

        if (empty($parameters = $reflector->getParameters())) {
            throw new SpApiResolutionException("The callback passed to SpApi::execute"
                . " has no parameters; the first argument must be one of: ["
                . implode(', ', SpApiRoster::allApiClassFqns()) . "]");
        }

        // TODO: Update the use of `getClass()` to `getType()`, as the former is deprecated
        // and highly discouraged as of PHP 8, whereas the latter is only available from PHP 7.
        $typeHintedParameterClass = $parameters[0]->getClass();
        if (empty($typeHintedParameterClass->name)) {
            throw new SpApiResolutionException("Unable to resolve API client class"
                . " in the callback of SpApi::execute; please type-hint a valid API class name,"
                . " or call a setter method explicitly (e.g. ordersV0(), reportsV20210630() etc).");
        }

        if (!SpApiRoster::isValidApiClassFqn($typeHintedParameterClass->name)) {
            throw new SpApiResolutionException("Invalid type-hinted class name"
                . " [{$typeHintedParameterClass->name}] in the callback of SpApi::execute;"
                . " must be one of: [" . implode(', ', SpApiRoster::allApiClassFqns()) . "]");
        }

        return SpApiRoster::getFactoryMethodFromApiClassFqn($typeHintedParameterClass->name);
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
        } catch (Exception $ex) {
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

    /**
     * @param DomainApiException|RestrictedDataTokenException $ex
     * @param string $clientFactoryMethod
     * @param callable $execute
     * @return mixed
     * @throws DomainApiException|LwaAccessTokenException|RestrictedDataTokenException
     */
    protected function _tryAgainIf403OrThrow(
        $ex,
        $clientFactoryMethod,
        callable $execute
    ) {
        if ($ex->getCode() === 403) {
            $this->lwaService->forgetCachedLwaAccessToken();
            return $this->_invokeExecuteCallback($clientFactoryMethod, $execute);
        }
        throw $ex;
    }
}
