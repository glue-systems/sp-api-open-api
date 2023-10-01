<?php

namespace Glue\SpApi\OpenAPI\Services\Factory;

use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticatorInterface;
use Glue\SpApi\OpenAPI\Utilities\BuilderMiddlewarePipeline;
use Glue\SpApi\OpenAPI\Utilities\ClientBuilder;

class ClientFactory implements ClientFactoryInterface
{
    /**
     * @var ClientAuthenticatorInterface
     */
    protected $authenticator;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    /**
     * @var callable
     */
    protected $instantiateGuzzleHandlerStack;

    /**
     * @param ClientAuthenticatorInterface $authenticator
     * @param SpApiConfig $spApiConfig
     * @param callable|null $instantiateGuzzleHandlerStack Optional callback for defining how a new `HandlerStack` is instantiated for use in the `ClientBuilder`, in case the Guzzle-recommended default insantiation via `HandlerStack::create` is not desirable for a developer's use-case.
     */
    public function __construct(
        ClientAuthenticatorInterface $authenticator,
        SpApiConfig $spApiConfig,
        callable $instantiateGuzzleHandlerStack = null
    ) {
        $this->authenticator                 = $authenticator;
        $this->spApiConfig                   = $spApiConfig;
        $this->instantiateGuzzleHandlerStack = $instantiateGuzzleHandlerStack
            ?: function () {
                return null;
            };
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi
     * @throws LwaAccessTokenException
     */
    public function createAplusContentV20201101ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi
     * @throws LwaAccessTokenException
     */
    public function createAuthorizationV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi
     * @throws LwaAccessTokenException
     */
    public function createCatalogItemsV0ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi
     * @throws LwaAccessTokenException
     */
    public function createCatalogItemsV20201201ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi
     * @throws LwaAccessTokenException
     */
    public function createDefinitionsProductTypesV20200901ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi
     * @throws LwaAccessTokenException
     */
    public function createEasyShipV20220323ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi
     * @throws LwaAccessTokenException
     */
    public function createFbaInboundEligibilityV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi
     * @throws LwaAccessTokenException
     */
    public function createFbaInventoryV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi
     * @throws LwaAccessTokenException
     */
    public function createFbaSmallAndLightV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi
     * @throws LwaAccessTokenException
     */
    public function createFeedsV20200904ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi
     * @throws LwaAccessTokenException
     */
    public function createFeedsV20210630ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi
     * @throws LwaAccessTokenException
     */
    public function createFinancesV0ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi
     * @throws LwaAccessTokenException
     */
    public function createFulfillmentInboundV0ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi
     * @throws LwaAccessTokenException
     */
    public function createFulfillmentOutboundV20200701ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi
     * @throws LwaAccessTokenException
     */
    public function createListingsItemsV20200901ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi
     * @throws LwaAccessTokenException
     */
    public function createListingsItemsV20210801ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi
     * @throws LwaAccessTokenException
     */
    public function createListingsRestrictionsV20210801ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createMerchantFulfillmentV0ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi
     * @throws LwaAccessTokenException
     */
    public function createNotificationsV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createOrdersV0ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi
     * @throws LwaAccessTokenException
     */
    public function createOrdersV0ShipmentApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi
     * @throws LwaAccessTokenException
     */
    public function createProductFeesV0ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi
     * @throws LwaAccessTokenException
     */
    public function createProductPricingV0ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi
     * @throws LwaAccessTokenException
     */
    public function createReplenishmentV20221107OffersApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi
     * @throws LwaAccessTokenException
     */
    public function createReplenishmentV20221107SellingpartnersApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createReportsV20200904ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createReportsV20210630ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi
     * @throws LwaAccessTokenException
     */
    public function createSalesV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi
     * @throws LwaAccessTokenException
     */
    public function createSellersV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi
     * @throws LwaAccessTokenException
     */
    public function createServicesV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createShipmentInvoicingV0ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi
     * @throws LwaAccessTokenException
     */
    public function createSupplySourcesV20200701ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi
     * @throws LwaAccessTokenException
     */
    public function createTokensV20210301ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi
     * @throws LwaAccessTokenException
     */
    public function createUploadsV20201101ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentInventoryV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentOrdersV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentOrdersV20211228ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentPaymentsV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentSandboxDataV20211228ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentSandboxDataV20211228transactionstatusApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1CustomerInvoicesApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV1LabelsApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228CustomerInvoicesApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createVendorDirectFulfillmentShippingV20211228LabelsApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentTransactionsV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi
     * @throws LwaAccessTokenException
     */
    public function createVendorDirectFulfillmentTransactionsV20211228ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi::class,
            $pipeline
        );
    }

    /**
     * @return \Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi
     * @throws LwaAccessTokenException
     */
    public function createVendorTransactionStatusV1ApiClient(
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        return $this->_createClientViaBuilder(
            \Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi::class,
            $pipeline
        );
    }

    /**
     * @param string $clientClassFqn
     * @param callable|null $build
     *
     * @return AuthorizationV1Api
     * @throws LwaAccessTokenException
     */
    protected function _createClientViaBuilder(
        $clientClassFqn,
        BuilderMiddlewarePipeline $pipeline = null
    ) {
        $builder = (new ClientBuilder(
            $this->spApiConfig,
            call_user_func($this->instantiateGuzzleHandlerStack)
        ))->forClient($clientClassFqn);

        if ($pipeline) {
            $builder = $pipeline->send($builder);
        }

        return $builder->createClient($this->authenticator);
    }
}
