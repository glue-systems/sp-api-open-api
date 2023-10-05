<?php

namespace Glue\SpApi\OpenAPI;

class SpApiRoster
{
    const CLIENT_TO_CONFIG_FQN_MAPS = [
        Clients\APlusContentV20201101\Api\APlusContentApi::class                                           => Clients\APlusContentV20201101\Configuration::class,
        Clients\AuthorizationV1\Api\AuthorizationApi::class                                                => Clients\AuthorizationV1\Configuration::class,
        Clients\CatalogItemsV0\Api\CatalogApi::class                                                       => Clients\CatalogItemsV0\Configuration::class,
        Clients\CatalogItemsV20201201\Api\CatalogApi::class                                                => Clients\CatalogItemsV20201201\Configuration::class,
        Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi::class                                 => Clients\DefinitionsProductTypesV20200901\Configuration::class,
        Clients\EasyShipV20220323\Api\EasyShipApi::class                                                   => Clients\EasyShipV20220323\Configuration::class,
        Clients\FbaInboundEligibilityV1\Api\FbaInboundApi::class                                           => Clients\FbaInboundEligibilityV1\Configuration::class,
        Clients\FbaInventoryV1\Api\FbaInventoryApi::class                                                  => Clients\FbaInventoryV1\Configuration::class,
        Clients\FbaSmallAndLightV1\Api\SmallAndLightApi::class                                             => Clients\FbaSmallAndLightV1\Configuration::class,
        Clients\FeedsV20200904\Api\FeedsApi::class                                                         => Clients\FeedsV20200904\Configuration::class,
        Clients\FeedsV20210630\Api\FeedsApi::class                                                         => Clients\FeedsV20210630\Configuration::class,
        Clients\FinancesV0\Api\FinancesApi::class                                                          => Clients\FinancesV0\Configuration::class,
        Clients\FulfillmentInboundV0\Api\FbaInboundApi::class                                              => Clients\FulfillmentInboundV0\Configuration::class,
        Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi::class                                     => Clients\FulfillmentOutboundV20200701\Configuration::class,
        Clients\ListingsItemsV20200901\Api\ListingsApi::class                                              => Clients\ListingsItemsV20200901\Configuration::class,
        Clients\ListingsItemsV20210801\Api\ListingsApi::class                                              => Clients\ListingsItemsV20210801\Configuration::class,
        Clients\ListingsRestrictionsV20210801\Api\ListingsApi::class                                       => Clients\ListingsRestrictionsV20210801\Configuration::class,
        Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi::class                                    => Clients\MerchantFulfillmentV0\Configuration::class,
        Clients\NotificationsV1\Api\NotificationsApi::class                                                => Clients\NotificationsV1\Configuration::class,
        Clients\OrdersV0\Api\OrdersV0Api::class                                                            => Clients\OrdersV0\Configuration::class,
        Clients\ProductFeesV0\Api\FeesApi::class                                                           => Clients\ProductFeesV0\Configuration::class,
        Clients\ProductPricingV0\Api\ProductPricingApi::class                                              => Clients\ProductPricingV0\Configuration::class,
        Clients\ReplenishmentV20221107\Api\ReplenishmentApi::class                                         => Clients\ReplenishmentV20221107\Configuration::class,
        Clients\ReportsV20200904\Api\ReportsApi::class                                                     => Clients\ReportsV20200904\Configuration::class,
        Clients\ReportsV20210630\Api\ReportsApi::class                                                     => Clients\ReportsV20210630\Configuration::class,
        Clients\SalesV1\Api\SalesApi::class                                                                => Clients\SalesV1\Configuration::class,
        Clients\SellersV1\Api\SellersApi::class                                                            => Clients\SellersV1\Configuration::class,
        Clients\ServicesV1\Api\ServiceApi::class                                                           => Clients\ServicesV1\Configuration::class,
        Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi::class                                          => Clients\ShipmentInvoicingV0\Configuration::class,
        Clients\SupplySourcesV20200701\Api\SupplySourcesApi::class                                         => Clients\SupplySourcesV20200701\Configuration::class,
        Clients\TokensV20210301\Api\TokensApi::class                                                       => Clients\TokensV20210301\Configuration::class,
        Clients\UploadsV20201101\Api\UploadsApi::class                                                     => Clients\UploadsV20201101\Configuration::class,
        Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi::class                           => Clients\VendorDirectFulfillmentInventoryV1\Configuration::class,
        Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi::class                                 => Clients\VendorDirectFulfillmentOrdersV1\Configuration::class,
        Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi::class                          => Clients\VendorDirectFulfillmentOrdersV20211228\Configuration::class,
        Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi::class                              => Clients\VendorDirectFulfillmentPaymentsV1\Configuration::class,
        Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi::class                  => Clients\VendorDirectFulfillmentSandboxDataV20211228\Configuration::class,
        Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi::class                             => Clients\VendorDirectFulfillmentShippingV1\Configuration::class,
        Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi::class                      => Clients\VendorDirectFulfillmentShippingV20211228\Configuration::class,
        Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi::class                      => Clients\VendorDirectFulfillmentTransactionsV1\Configuration::class,
        Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi::class               => Clients\VendorDirectFulfillmentTransactionsV20211228\Configuration::class,
        Clients\VendorTransactionStatusV1\Api\VendorTransactionApi::class                                  => Clients\VendorTransactionStatusV1\Configuration::class,
    ];

    const CLIENT_TO_EXCEPTION_FQN_MAPS = [
        Clients\APlusContentV20201101\Api\APlusContentApi::class                                           => Clients\APlusContentV20201101\ApiException::class,
        Clients\AuthorizationV1\Api\AuthorizationApi::class                                                => Clients\AuthorizationV1\ApiException::class,
        Clients\CatalogItemsV0\Api\CatalogApi::class                                                       => Clients\CatalogItemsV0\ApiException::class,
        Clients\CatalogItemsV20201201\Api\CatalogApi::class                                                => Clients\CatalogItemsV20201201\ApiException::class,
        Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi::class                                 => Clients\DefinitionsProductTypesV20200901\ApiException::class,
        Clients\EasyShipV20220323\Api\EasyShipApi::class                                                   => Clients\EasyShipV20220323\ApiException::class,
        Clients\FbaInboundEligibilityV1\Api\FbaInboundApi::class                                           => Clients\FbaInboundEligibilityV1\ApiException::class,
        Clients\FbaInventoryV1\Api\FbaInventoryApi::class                                                  => Clients\FbaInventoryV1\ApiException::class,
        Clients\FbaSmallAndLightV1\Api\SmallAndLightApi::class                                             => Clients\FbaSmallAndLightV1\ApiException::class,
        Clients\FeedsV20200904\Api\FeedsApi::class                                                         => Clients\FeedsV20200904\ApiException::class,
        Clients\FeedsV20210630\Api\FeedsApi::class                                                         => Clients\FeedsV20210630\ApiException::class,
        Clients\FinancesV0\Api\FinancesApi::class                                                          => Clients\FinancesV0\ApiException::class,
        Clients\FulfillmentInboundV0\Api\FbaInboundApi::class                                              => Clients\FulfillmentInboundV0\ApiException::class,
        Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi::class                                     => Clients\FulfillmentOutboundV20200701\ApiException::class,
        Clients\ListingsItemsV20200901\Api\ListingsApi::class                                              => Clients\ListingsItemsV20200901\ApiException::class,
        Clients\ListingsItemsV20210801\Api\ListingsApi::class                                              => Clients\ListingsItemsV20210801\ApiException::class,
        Clients\ListingsRestrictionsV20210801\Api\ListingsApi::class                                       => Clients\ListingsRestrictionsV20210801\ApiException::class,
        Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi::class                                    => Clients\MerchantFulfillmentV0\ApiException::class,
        Clients\NotificationsV1\Api\NotificationsApi::class                                                => Clients\NotificationsV1\ApiException::class,
        Clients\OrdersV0\Api\OrdersV0Api::class                                                            => Clients\OrdersV0\ApiException::class,
        Clients\ProductFeesV0\Api\FeesApi::class                                                           => Clients\ProductFeesV0\ApiException::class,
        Clients\ProductPricingV0\Api\ProductPricingApi::class                                              => Clients\ProductPricingV0\ApiException::class,
        Clients\ReplenishmentV20221107\Api\ReplenishmentApi::class                                         => Clients\ReplenishmentV20221107\ApiException::class,
        Clients\ReportsV20200904\Api\ReportsApi::class                                                     => Clients\ReportsV20200904\ApiException::class,
        Clients\ReportsV20210630\Api\ReportsApi::class                                                     => Clients\ReportsV20210630\ApiException::class,
        Clients\SalesV1\Api\SalesApi::class                                                                => Clients\SalesV1\ApiException::class,
        Clients\SellersV1\Api\SellersApi::class                                                            => Clients\SellersV1\ApiException::class,
        Clients\ServicesV1\Api\ServiceApi::class                                                           => Clients\ServicesV1\ApiException::class,
        Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi::class                                          => Clients\ShipmentInvoicingV0\ApiException::class,
        Clients\SupplySourcesV20200701\Api\SupplySourcesApi::class                                         => Clients\SupplySourcesV20200701\ApiException::class,
        Clients\TokensV20210301\Api\TokensApi::class                                                       => Clients\TokensV20210301\ApiException::class,
        Clients\UploadsV20201101\Api\UploadsApi::class                                                     => Clients\UploadsV20201101\ApiException::class,
        Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi::class                           => Clients\VendorDirectFulfillmentInventoryV1\ApiException::class,
        Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi::class                                 => Clients\VendorDirectFulfillmentOrdersV1\ApiException::class,
        Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi::class                          => Clients\VendorDirectFulfillmentOrdersV20211228\ApiException::class,
        Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi::class                              => Clients\VendorDirectFulfillmentPaymentsV1\ApiException::class,
        Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi::class                  => Clients\VendorDirectFulfillmentSandboxDataV20211228\ApiException::class,
        Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi::class                             => Clients\VendorDirectFulfillmentShippingV1\ApiException::class,
        Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi::class                      => Clients\VendorDirectFulfillmentShippingV20211228\ApiException::class,
        Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi::class                      => Clients\VendorDirectFulfillmentTransactionsV1\ApiException::class,
        Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi::class               => Clients\VendorDirectFulfillmentTransactionsV20211228\ApiException::class,
        Clients\VendorTransactionStatusV1\Api\VendorTransactionApi::class                                  => Clients\VendorTransactionStatusV1\ApiException::class,
    ];

    const CLIENT_FQN_TO_FACTORY_METHOD_MAPS = [
        Clients\APlusContentV20201101\Api\APlusContentApi::class                                           => 'createAPlusContentV20201101ApiClient',
        Clients\AuthorizationV1\Api\AuthorizationApi::class                                                => 'createAuthorizationV1ApiClient',
        Clients\CatalogItemsV0\Api\CatalogApi::class                                                       => 'createCatalogItemsV0ApiClient',
        Clients\CatalogItemsV20201201\Api\CatalogApi::class                                                => 'createCatalogItemsV20201201ApiClient',
        Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi::class                                 => 'createDefinitionsProductTypesV20200901ApiClient',
        Clients\EasyShipV20220323\Api\EasyShipApi::class                                                   => 'createEasyShipV20220323ApiClient',
        Clients\FbaInboundEligibilityV1\Api\FbaInboundApi::class                                           => 'createFbaInboundEligibilityV1ApiClient',
        Clients\FbaInventoryV1\Api\FbaInventoryApi::class                                                  => 'createFbaInventoryV1ApiClient',
        Clients\FbaSmallAndLightV1\Api\SmallAndLightApi::class                                             => 'createFbaSmallAndLightV1ApiClient',
        Clients\FeedsV20200904\Api\FeedsApi::class                                                         => 'createFeedsV20200904ApiClient',
        Clients\FeedsV20210630\Api\FeedsApi::class                                                         => 'createFeedsV20210630ApiClient',
        Clients\FinancesV0\Api\FinancesApi::class                                                          => 'createFinancesV0ApiClient',
        Clients\FulfillmentInboundV0\Api\FbaInboundApi::class                                              => 'createFulfillmentInboundV0ApiClient',
        Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi::class                                     => 'createFulfillmentOutboundV20200701ApiClient',
        Clients\ListingsItemsV20200901\Api\ListingsApi::class                                              => 'createListingsItemsV20200901ApiClient',
        Clients\ListingsItemsV20210801\Api\ListingsApi::class                                              => 'createListingsItemsV20210801ApiClient',
        Clients\ListingsRestrictionsV20210801\Api\ListingsApi::class                                       => 'createListingsRestrictionsV20210801ApiClient',
        Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi::class                                    => 'createMerchantFulfillmentV0ApiClient',
        Clients\NotificationsV1\Api\NotificationsApi::class                                                => 'createNotificationsV1ApiClient',
        Clients\OrdersV0\Api\OrdersV0Api::class                                                            => 'createOrdersV0ApiClient',
        Clients\ProductFeesV0\Api\FeesApi::class                                                           => 'createProductFeesV0ApiClient',
        Clients\ProductPricingV0\Api\ProductPricingApi::class                                              => 'createProductPricingV0ApiClient',
        Clients\ReplenishmentV20221107\Api\ReplenishmentApi::class                                         => 'createReplenishmentV20221107ApiClient',
        Clients\ReportsV20200904\Api\ReportsApi::class                                                     => 'createReportsV20200904ApiClient',
        Clients\ReportsV20210630\Api\ReportsApi::class                                                     => 'createReportsV20210630ApiClient',
        Clients\SalesV1\Api\SalesApi::class                                                                => 'createSalesV1ApiClient',
        Clients\SellersV1\Api\SellersApi::class                                                            => 'createSellersV1ApiClient',
        Clients\ServicesV1\Api\ServiceApi::class                                                           => 'createServicesV1ApiClient',
        Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi::class                                          => 'createShipmentInvoicingV0ApiClient',
        Clients\SupplySourcesV20200701\Api\SupplySourcesApi::class                                         => 'createSupplySourcesV20200701ApiClient',
        Clients\TokensV20210301\Api\TokensApi::class                                                       => 'createTokensV20210301ApiClient',
        Clients\UploadsV20201101\Api\UploadsApi::class                                                     => 'createUploadsV20201101ApiClient',
        Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi::class                           => 'createVendorDirectFulfillmentInventoryV1ApiClient',
        Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi::class                                 => 'createVendorDirectFulfillmentOrdersV1ApiClient',
        Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi::class                          => 'createVendorDirectFulfillmentOrdersV20211228ApiClient',
        Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi::class                              => 'createVendorDirectFulfillmentPaymentsV1ApiClient',
        Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi::class                  => 'createVendorDirectFulfillmentSandboxDataV20211228ApiClient',
        Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi::class                             => 'createVendorDirectFulfillmentShippingV1ApiClient',
        Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi::class                      => 'createVendorDirectFulfillmentShippingV20211228ApiClient',
        Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi::class                      => 'createVendorDirectFulfillmentTransactionsV1ApiClient',
        Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi::class               => 'createVendorDirectFulfillmentTransactionsV20211228ApiClient',
        Clients\VendorTransactionStatusV1\Api\VendorTransactionApi::class                                  => 'createVendorTransactionStatusV1ApiClient',
    ];

    /**
     * @return array
     */
    public static function allClientClassFqns()
    {
        return array_keys(static::CLIENT_TO_CONFIG_FQN_MAPS);
    }

    /**
     * @return array
     */
    public static function allClientConfigClassFqns()
    {
        return array_unique(array_values(static::CLIENT_TO_CONFIG_FQN_MAPS));
    }

    /**
     * @return array
     */
    public static function allApiExceptionClassFqns()
    {
        return array_unique(array_values(static::CLIENT_TO_EXCEPTION_FQN_MAPS));
    }

    /**
     * @param string $clientClassFqn
     * @return bool
     */
    public static function isValidClientClassFqn($clientClassFqn)
    {
        return array_key_exists($clientClassFqn, static::CLIENT_TO_CONFIG_FQN_MAPS);
    }

    /**
     * @param \Exception $exception
     * @return bool
     */
    public static function isApiException($exception)
    {
        foreach (static::allApiExceptionClassFqns() as $apiExceptionClassFqn) {
            if ($exception instanceof $apiExceptionClassFqn) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param string $clientClassFqn
     * @return string Domain config class FQN corresponding to the provided API class FQN
     */
    public static function getClientConfigFqnFromClientClass($clientClassFqn)
    {
        return static::CLIENT_TO_CONFIG_FQN_MAPS[$clientClassFqn];
    }

    /**
     * @param string $clientClassFqn
     * @return string `ClientFactory` method corresponding to the provided API class FQN
     */
    public static function getFactoryMethodFromClientClassFqn($clientClassFqn)
    {
        return static::CLIENT_FQN_TO_FACTORY_METHOD_MAPS[$clientClassFqn];
    }
}
