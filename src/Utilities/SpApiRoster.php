<?php

namespace Glue\SpApi\OpenAPI\Utilities;

use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi as AplusContentV20201101Api;
use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\ApiException as AplusContentV20201101ApiException;
use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Configuration as AplusContentV20201101Config;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Api\AuthorizationApi as AuthorizationV1Api;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\ApiException as AuthorizationV1ApiException;
use Glue\SpApi\OpenAPI\Clients\AuthorizationV1\Configuration as AuthorizationV1Config;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Api\CatalogApi as CatalogItemsV0Api;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\ApiException as CatalogItemsV0ApiException;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV0\Configuration as CatalogItemsV0Config;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Api\CatalogApi as CatalogItemsV20201201Api;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\ApiException as CatalogItemsV20201201ApiException;
use Glue\SpApi\OpenAPI\Clients\CatalogItemsV20201201\Configuration as CatalogItemsV20201201Config;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\ApiException as DefinitionsProductTypesV20200901ApiException;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration as DefinitionsProductTypesV20200901Config;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi as EasyShipV20220323Api;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\ApiException as EasyShipV20220323ApiException;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Configuration as EasyShipV20220323Config;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi as FbaInboundEligibilityV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\ApiException as FbaInboundEligibilityV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Configuration as FbaInboundEligibilityV1Config;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Api\FbaInventoryApi as FbaInventoryV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\ApiException as FbaInventoryV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaInventoryV1\Configuration as FbaInventoryV1Config;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi as FbaSmallAndLightV1Api;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\ApiException as FbaSmallAndLightV1ApiException;
use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Configuration as FbaSmallAndLightV1Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\ApiException as FeedsV20200904ApiException;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\ApiException as FeedsV20210630ApiException;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Api\DefaultApi as FinancesV0Api;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\ApiException as FinancesV0ApiException;
use Glue\SpApi\OpenAPI\Clients\FinancesV0\Configuration as FinancesV0Config;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi as FulfillmentInboundV0Api;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\ApiException as FulfillmentInboundV0ApiException;
use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Configuration as FulfillmentInboundV0Config;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi as FulfillmentOutboundV20200701Api;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\ApiException as FulfillmentOutboundV20200701ApiException;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Configuration as FulfillmentOutboundV20200701Config;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\ApiException as ListingsItemsV20200901ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Configuration as ListingsItemsV20200901Config;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Api\ListingsApi as ListingsItemsV20210801Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\ApiException as ListingsItemsV20210801ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20210801\Configuration as ListingsItemsV20210801Config;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Api\ListingsApi as ListingsRestrictionsV20210801Api;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\ApiException as ListingsRestrictionsV20210801ApiException;
use Glue\SpApi\OpenAPI\Clients\ListingsRestrictionsV20210801\Configuration as ListingsRestrictionsV20210801Config;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi as MerchantFulfillmentV0Api;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\ApiException as MerchantFulfillmentV0ApiException;
use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Configuration as MerchantFulfillmentV0Config;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Api\NotificationsApi as NotificationsV1Api;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\ApiException as NotificationsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\NotificationsV1\Configuration as NotificationsV1Config;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\ApiException as OrdersV0ApiException;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Configuration as OrdersV0Config;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Api\FeesApi as ProductFeesV0Api;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\ApiException as ProductFeesV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ProductFeesV0\Configuration as ProductFeesV0Config;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Api\ProductPricingApi as ProductPricingV0Api;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\ApiException as ProductPricingV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ProductPricingV0\Configuration as ProductPricingV0Config;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\OffersApi as ReplenishmentV20221107OffersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi as ReplenishmentV20221107SellingpartnersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\ApiException as ReplenishmentV20221107ApiException;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Configuration as ReplenishmentV20221107Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\ApiException as ReportsV20200904ApiException;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Configuration as ReportsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\ApiException as ReportsV20210630ApiException;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Configuration as ReportsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi as SalesV1Api;
use Glue\SpApi\OpenAPI\Clients\SalesV1\ApiException as SalesV1ApiException;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Configuration as SalesV1Config;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Api\SellersApi as SellersV1Api;
use Glue\SpApi\OpenAPI\Clients\SellersV1\ApiException as SellersV1ApiException;
use Glue\SpApi\OpenAPI\Clients\SellersV1\Configuration as SellersV1Config;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi as ServicesV1Api;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\ApiException as ServicesV1ApiException;
use Glue\SpApi\OpenAPI\Clients\ServicesV1\Configuration as ServicesV1Config;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi as ShipmentInvoicingV0Api;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\ApiException as ShipmentInvoicingV0ApiException;
use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Configuration as ShipmentInvoicingV0Config;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\ApiException as SupplySourcesV20200701ApiException;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Configuration as SupplySourcesV20200701Config;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\ApiException as TokensV20210301ApiException;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Configuration as TokensV20210301Config;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi as UploadsV20201101Api;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\ApiException as UploadsV20201101ApiException;
use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Configuration as UploadsV20201101Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi as VendorDirectFulfillmentInventoryV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\ApiException as VendorDirectFulfillmentInventoryV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Configuration as VendorDirectFulfillmentInventoryV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Api\VendorOrdersApi as VendorDirectFulfillmentOrdersV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\ApiException as VendorDirectFulfillmentOrdersV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Configuration as VendorDirectFulfillmentOrdersV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi as VendorDirectFulfillmentOrdersV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\ApiException as VendorDirectFulfillmentOrdersV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Configuration as VendorDirectFulfillmentOrdersV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi as VendorDirectFulfillmentPaymentsV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\ApiException as VendorDirectFulfillmentPaymentsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Configuration as VendorDirectFulfillmentPaymentsV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi as VendorDirectFulfillmentSandboxDataV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi as VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\ApiException as VendorDirectFulfillmentSandboxDataV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Configuration as VendorDirectFulfillmentSandboxDataV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi as VendorDirectFulfillmentShippingV1CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi as VendorDirectFulfillmentShippingV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi as VendorDirectFulfillmentShippingV1LabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\ApiException as VendorDirectFulfillmentShippingV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Configuration as VendorDirectFulfillmentShippingV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi as VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi as VendorDirectFulfillmentShippingV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi as VendorDirectFulfillmentShippingV20211228LabelsApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\ApiException as VendorDirectFulfillmentShippingV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Configuration as VendorDirectFulfillmentShippingV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Api\VendorTransactionApi as VendorDirectFulfillmentTransactionsV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\ApiException as VendorDirectFulfillmentTransactionsV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV1\Configuration as VendorDirectFulfillmentTransactionsV1Config;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi as VendorDirectFulfillmentTransactionsV20211228Api;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\ApiException as VendorDirectFulfillmentTransactionsV20211228ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Configuration as VendorDirectFulfillmentTransactionsV20211228Config;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi as VendorTransactionStatusV1Api;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\ApiException as VendorTransactionStatusV1ApiException;
use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Configuration as VendorTransactionStatusV1Config;

class SpApiRoster
{
    const API_TO_CONFIG_FQN_MAPS = [
        AplusContentV20201101Api::class                                         => AplusContentV20201101Config::class,
        AuthorizationV1Api::class                                               => AuthorizationV1Config::class,
        CatalogItemsV0Api::class                                                => CatalogItemsV0Config::class,
        CatalogItemsV20201201Api::class                                         => CatalogItemsV20201201Config::class,
        DefinitionsProductTypesV20200901Api::class                              => DefinitionsProductTypesV20200901Config::class,
        EasyShipV20220323Api::class                                             => EasyShipV20220323Config::class,
        FbaInboundEligibilityV1Api::class                                       => FbaInboundEligibilityV1Config::class,
        FbaInventoryV1Api::class                                                => FbaInventoryV1Config::class,
        FbaSmallAndLightV1Api::class                                            => FbaSmallAndLightV1Config::class,
        FeedsV20200904Api::class                                                => FeedsV20200904Config::class,
        FeedsV20210630Api::class                                                => FeedsV20210630Config::class,
        FinancesV0Api::class                                                    => FinancesV0Config::class,
        FulfillmentInboundV0Api::class                                          => FulfillmentInboundV0Config::class,
        FulfillmentOutboundV20200701Api::class                                  => FulfillmentOutboundV20200701Config::class,
        ListingsItemsV20200901Api::class                                        => ListingsItemsV20200901Config::class,
        ListingsItemsV20210801Api::class                                        => ListingsItemsV20210801Config::class,
        ListingsRestrictionsV20210801Api::class                                 => ListingsRestrictionsV20210801Config::class,
        MerchantFulfillmentV0Api::class                                         => MerchantFulfillmentV0Config::class,
        NotificationsV1Api::class                                               => NotificationsV1Config::class,
        OrdersV0Api::class                                                      => OrdersV0Config::class,
        OrdersV0ShipmentApi::class                                              => OrdersV0Config::class,
        ProductFeesV0Api::class                                                 => ProductFeesV0Config::class,
        ProductPricingV0Api::class                                              => ProductPricingV0Config::class,
        ReplenishmentV20221107OffersApi::class                                  => ReplenishmentV20221107Config::class,
        ReplenishmentV20221107SellingpartnersApi::class                         => ReplenishmentV20221107Config::class,
        ReportsV20200904Api::class                                              => ReportsV20200904Config::class,
        ReportsV20210630Api::class                                              => ReportsV20210630Config::class,
        SalesV1Api::class                                                       => SalesV1Config::class,
        SellersV1Api::class                                                     => SellersV1Config::class,
        ServicesV1Api::class                                                    => ServicesV1Config::class,
        ShipmentInvoicingV0Api::class                                           => ShipmentInvoicingV0Config::class,
        SupplySourcesV20200701Api::class                                        => SupplySourcesV20200701Config::class,
        TokensV20210301Api::class                                               => TokensV20210301Config::class,
        UploadsV20201101Api::class                                              => UploadsV20201101Config::class,
        VendorDirectFulfillmentInventoryV1Api::class                            => VendorDirectFulfillmentInventoryV1Config::class,
        VendorDirectFulfillmentOrdersV1Api::class                               => VendorDirectFulfillmentOrdersV1Config::class,
        VendorDirectFulfillmentOrdersV20211228Api::class                        => VendorDirectFulfillmentOrdersV20211228Config::class,
        VendorDirectFulfillmentPaymentsV1Api::class                             => VendorDirectFulfillmentPaymentsV1Config::class,
        VendorDirectFulfillmentSandboxDataV20211228Api::class                   => VendorDirectFulfillmentSandboxDataV20211228Config::class,
        VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi::class  => VendorDirectFulfillmentSandboxDataV20211228Config::class,
        VendorDirectFulfillmentShippingV1CustomerInvoicesApi::class             => VendorDirectFulfillmentShippingV1Config::class,
        VendorDirectFulfillmentShippingV1Api::class                             => VendorDirectFulfillmentShippingV1Config::class,
        VendorDirectFulfillmentShippingV1LabelsApi::class                       => VendorDirectFulfillmentShippingV1Config::class,
        VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi::class      => VendorDirectFulfillmentShippingV20211228Config::class,
        VendorDirectFulfillmentShippingV20211228Api::class                      => VendorDirectFulfillmentShippingV20211228Config::class,
        VendorDirectFulfillmentShippingV20211228LabelsApi::class                => VendorDirectFulfillmentShippingV20211228Config::class,
        VendorDirectFulfillmentTransactionsV1Api::class                         => VendorDirectFulfillmentTransactionsV1Config::class,
        VendorDirectFulfillmentTransactionsV20211228Api::class                  => VendorDirectFulfillmentTransactionsV20211228Config::class,
        VendorTransactionStatusV1Api::class                                     => VendorTransactionStatusV1Config::class,
    ];

    const API_TO_EXCEPTION_FQN_MAPS = [
        AplusContentV20201101Api::class                                         => AplusContentV20201101ApiException::class,
        AuthorizationV1Api::class                                               => AuthorizationV1ApiException::class,
        CatalogItemsV0Api::class                                                => CatalogItemsV0ApiException::class,
        CatalogItemsV20201201Api::class                                         => CatalogItemsV20201201ApiException::class,
        DefinitionsProductTypesV20200901Api::class                              => DefinitionsProductTypesV20200901ApiException::class,
        EasyShipV20220323Api::class                                             => EasyShipV20220323ApiException::class,
        FbaInboundEligibilityV1Api::class                                       => FbaInboundEligibilityV1ApiException::class,
        FbaInventoryV1Api::class                                                => FbaInventoryV1ApiException::class,
        FbaSmallAndLightV1Api::class                                            => FbaSmallAndLightV1ApiException::class,
        FeedsV20200904Api::class                                                => FeedsV20200904ApiException::class,
        FeedsV20210630Api::class                                                => FeedsV20210630ApiException::class,
        FinancesV0Api::class                                                    => FinancesV0ApiException::class,
        FulfillmentInboundV0Api::class                                          => FulfillmentInboundV0ApiException::class,
        FulfillmentOutboundV20200701Api::class                                  => FulfillmentOutboundV20200701ApiException::class,
        ListingsItemsV20200901Api::class                                        => ListingsItemsV20200901ApiException::class,
        ListingsItemsV20210801Api::class                                        => ListingsItemsV20210801ApiException::class,
        ListingsRestrictionsV20210801Api::class                                 => ListingsRestrictionsV20210801ApiException::class,
        MerchantFulfillmentV0Api::class                                         => MerchantFulfillmentV0ApiException::class,
        NotificationsV1Api::class                                               => NotificationsV1ApiException::class,
        OrdersV0Api::class                                                      => OrdersV0ApiException::class,
        OrdersV0ShipmentApi::class                                              => OrdersV0ApiException::class,
        ProductFeesV0Api::class                                                 => ProductFeesV0ApiException::class,
        ProductPricingV0Api::class                                              => ProductPricingV0ApiException::class,
        ReplenishmentV20221107OffersApi::class                                  => ReplenishmentV20221107ApiException::class,
        ReplenishmentV20221107SellingpartnersApi::class                         => ReplenishmentV20221107ApiException::class,
        ReportsV20200904Api::class                                              => ReportsV20200904ApiException::class,
        ReportsV20210630Api::class                                              => ReportsV20210630ApiException::class,
        SalesV1Api::class                                                       => SalesV1ApiException::class,
        SellersV1Api::class                                                     => SellersV1ApiException::class,
        ServicesV1Api::class                                                    => ServicesV1ApiException::class,
        ShipmentInvoicingV0Api::class                                           => ShipmentInvoicingV0ApiException::class,
        SupplySourcesV20200701Api::class                                        => SupplySourcesV20200701ApiException::class,
        TokensV20210301Api::class                                               => TokensV20210301ApiException::class,
        UploadsV20201101Api::class                                              => UploadsV20201101ApiException::class,
        VendorDirectFulfillmentInventoryV1Api::class                            => VendorDirectFulfillmentInventoryV1ApiException::class,
        VendorDirectFulfillmentOrdersV1Api::class                               => VendorDirectFulfillmentOrdersV1ApiException::class,
        VendorDirectFulfillmentOrdersV20211228Api::class                        => VendorDirectFulfillmentOrdersV20211228ApiException::class,
        VendorDirectFulfillmentPaymentsV1Api::class                             => VendorDirectFulfillmentPaymentsV1ApiException::class,
        VendorDirectFulfillmentSandboxDataV20211228Api::class                   => VendorDirectFulfillmentSandboxDataV20211228ApiException::class,
        VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi::class  => VendorDirectFulfillmentSandboxDataV20211228ApiException::class,
        VendorDirectFulfillmentShippingV1CustomerInvoicesApi::class             => VendorDirectFulfillmentShippingV1ApiException::class,
        VendorDirectFulfillmentShippingV1Api::class                             => VendorDirectFulfillmentShippingV1ApiException::class,
        VendorDirectFulfillmentShippingV1LabelsApi::class                       => VendorDirectFulfillmentShippingV1ApiException::class,
        VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi::class      => VendorDirectFulfillmentShippingV20211228ApiException::class,
        VendorDirectFulfillmentShippingV20211228Api::class                      => VendorDirectFulfillmentShippingV20211228ApiException::class,
        VendorDirectFulfillmentShippingV20211228LabelsApi::class                => VendorDirectFulfillmentShippingV20211228ApiException::class,
        VendorDirectFulfillmentTransactionsV1Api::class                         => VendorDirectFulfillmentTransactionsV1ApiException::class,
        VendorDirectFulfillmentTransactionsV20211228Api::class                  => VendorDirectFulfillmentTransactionsV20211228ApiException::class,
        VendorTransactionStatusV1Api::class                                     => VendorTransactionStatusV1ApiException::class,
    ];

    /**
     * @return array
     */
    public static function allApiClassFqns()
    {
        return array_keys(self::API_TO_CONFIG_FQN_MAPS);
    }

    /**
     * @return array
     */
    public static function allDomainConfigClassFqns()
    {
        return array_unique(array_values(self::API_TO_CONFIG_FQN_MAPS));
    }

    /**
     * @return array
     */
    public static function allApiExceptionClassFqns()
    {
        return array_unique(array_values(self::API_TO_EXCEPTION_FQN_MAPS));
    }

    /**
     * @param string $apiClassFqn
     * @return bool
     */
    public static function isValidApiClassFqn($apiClassFqn)
    {
        return array_key_exists($apiClassFqn, self::API_TO_CONFIG_FQN_MAPS);
    }

    /**
     * @param \Exception $exception
     * @return bool
     */
    public static function isApiException($exception)
    {
        foreach (self::allApiExceptionClassFqns() as $apiExceptionClassFqn) {
            if ($exception instanceof $apiExceptionClassFqn) {
                return true;
            }
        }
        return false;
    }

    /**
     * @param string $apiClassFqn
     * @return string Domain config class FQN corresponding to the provided API class FQN
     */
    public static function getDomainConfigFromApiClassFqn($apiClassFqn)
    {
        return self::API_TO_CONFIG_FQN_MAPS[$apiClassFqn];
    }
}
