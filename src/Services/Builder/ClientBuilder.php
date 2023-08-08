<?php

namespace Glue\SpApi\OpenAPI\Services\Builder;

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
use Glue\SpApi\OpenAPI\Exceptions\ClientBuilderException;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticatorInterface;
use Glue\SpApi\OpenAPI\SpApiConfig;

class ClientBuilder implements ClientBuilderInterface
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

    /**
     * @var ClientAuthenticatorInterface
     */
    protected $authenticator;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    /**
     * @var string
     */
    protected $apiClassFqn;

    /**
     * @var AplusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config
     */
    protected $domainConfig;

    /**
     * Provider callback for retrieving a Restricted Data Token (RDT),
     * if applicable to the target API.
     *
     * @var callable|null
     */
    protected $rdtProvider = null;

    public function __construct(
        ClientAuthenticatorInterface $authenticator,
        SpApiConfig $spApiConfig
    ) {
        $this->authenticator = $authenticator;
        $this->spApiConfig   = $spApiConfig;
    }

    /**
     * Set the target API by fully-qualified class name.
     *
     * @param string $apiClassFqn Fully qualified class name of the target API
     * @return static
     */
    public function forApi($apiClassFqn)
    {
        if (!array_key_exists($apiClassFqn, self::API_TO_CONFIG_FQN_MAPS)) {
            throw new ClientBuilderException("Invalid API class FQN [{$apiClassFqn}]: Must be"
                . " one of: " . implode(', ', array_keys(self::API_TO_CONFIG_FQN_MAPS)) . ".");
        }
        $domainConfigClassFqn = self::API_TO_CONFIG_FQN_MAPS[$apiClassFqn];

        $this->apiClassFqn  = $apiClassFqn;
        $this->domainConfig = new $domainConfigClassFqn();

        return $this;
    }

    /**
     * Set the Configuration object specific to the target API.
     *
     * @param null|AplusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config $domainConfig
     * @return static
     */
    public function withConfig($domainConfig = null)
    {
        if (!isset($this->apiClassFqn)) {
            throw new ClientBuilderException("Method 'withConfig' cannot be called"
                . " before the target API has been set via the 'forApi' method.");
        }

        if (is_null($domainConfig)) {
            return $this;
        }

        $expectedConfigClass = self::API_TO_CONFIG_FQN_MAPS[$this->apiClassFqn];
        if (!$domainConfig instanceof $expectedConfigClass) {
            throw new ClientBuilderException("Invalid configuartion class [" . get_class($domainConfig) . "]"
                . " for API [{$this->apiClassFqn}]: Expected instance of [{$expectedConfigClass}].");
        }

        $this->domainConfig = $domainConfig;
        return $this;
    }

    /**
     * Set the provider callback for retrieving a Restricted Data Token (RDT),
     * if applicable to the target API.
     *
     * @return static
     */
    public function withRdtProvider(callable $rdtProvider = null)
    {
        $this->rdtProvider = $rdtProvider;
        return $this;
    }

    /**
     * Create the API client according to the values set up in this builder instance.
     *
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     * @return AplusContentV20201101Api|AuthorizationV1Api|CatalogItemsV0Api|CatalogItemsV20201201Api|DefinitionsProductTypesV20200901Api|EasyShipV20220323Api|FbaInboundEligibilityV1Api|FbaInventoryV1Api|FbaSmallAndLightV1Api|FeedsV20200904Api|FeedsV20210630Api|FinancesV0Api|FulfillmentInboundV0Api|FulfillmentOutboundV20200701Api|ListingsItemsV20200901Api|ListingsItemsV20210801Api|ListingsRestrictionsV20210801Api|MerchantFulfillmentV0Api|NotificationsV1Api|OrdersV0Api|OrdersV0ShipmentApi|ProductFeesV0Api|ProductPricingV0Api|ReplenishmentV20221107OffersApi|ReplenishmentV20221107SellingpartnersApi|ReportsV20200904Api|ReportsV20210630Api|SalesV1Api|SellersV1Api|ServicesV1Api|ShipmentInvoicingV0Api|SupplySourcesV20200701Api|TokensV20210301Api|UploadsV20201101Api|VendorDirectFulfillmentInventoryV1Api|VendorDirectFulfillmentOrdersV1Api|VendorDirectFulfillmentOrdersV20211228Api|VendorDirectFulfillmentPaymentsV1Api|VendorDirectFulfillmentSandboxDataV20211228Api|VendorDirectFulfillmentSandboxDataV20211228transactionstatusApi|VendorDirectFulfillmentShippingV1CustomerInvoicesApi|VendorDirectFulfillmentShippingV1Api|VendorDirectFulfillmentShippingV1LabelsApi|VendorDirectFulfillmentShippingV20211228CustomerInvoicesApi|VendorDirectFulfillmentShippingV20211228Api|VendorDirectFulfillmentShippingV20211228LabelsApi|VendorDirectFulfillmentTransactionsV1Api|VendorDirectFulfillmentTransactionsV20211228Api|VendorTransactionStatusV1Api
     */
    public function createClient()
    {
        $this->_validateReadyToCreate();

        if ($this->rdtProvider) {
            $restrictedDataToken = call_user_func($this->rdtProvider);
        } else {
            $restrictedDataToken = null;
        }

        $apiClassFqn = $this->apiClassFqn;

        return new $apiClassFqn(
            $this->authenticator->createAuthenticatedGuzzleClient($restrictedDataToken),
            $this->_configureDefaults($this->domainConfig)
        );
    }

    /**
     * @return string
     */
    public function getApiClassFqn()
    {
        return $this->apiClassFqn;
    }

    /**
     * @return AplusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config
     */
    public function getDomainConfig()
    {
        return clone $this->domainConfig;
    }

    /**
     * @return callable|null
     */
    public function getRdtProvider()
    {
        return clone $this->rdtProvider;
    }

    /**
     * @param AplusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config $domainConfig
     * @return AplusContentV20201101Config|AuthorizationV1Config|CatalogItemsV0Config|CatalogItemsV20201201Config|DefinitionsProductTypesV20200901Config|EasyShipV20220323Config|FbaInboundEligibilityV1Config|FbaInventoryV1Config|FbaSmallAndLightV1Config|FeedsV20200904Config|FeedsV20210630Config|FinancesV0Config|FulfillmentInboundV0Config|FulfillmentOutboundV20200701Config|ListingsItemsV20200901Config|ListingsItemsV20210801Config|ListingsRestrictionsV20210801Config|MerchantFulfillmentV0Config|NotificationsV1Config|OrdersV0Config|ProductFeesV0Config|ProductPricingV0Config|ReplenishmentV20221107Config|ReportsV20200904Config|ReportsV20210630Config|SalesV1Config|SellersV1Config|ServicesV1Config|ShipmentInvoicingV0Config|SupplySourcesV20200701Config|TokensV20210301Config|UploadsV20201101Config|VendorDirectFulfillmentInventoryV1Config|VendorDirectFulfillmentOrdersV1Config|VendorDirectFulfillmentOrdersV20211228Config|VendorDirectFulfillmentPaymentsV1Config|VendorDirectFulfillmentSandboxDataV20211228Config|VendorDirectFulfillmentShippingV1Config|VendorDirectFulfillmentShippingV20211228Config|VendorDirectFulfillmentTransactionsV1Config|VendorDirectFulfillmentTransactionsV20211228Config|VendorTransactionStatusV1Config
     */
    protected function _configureDefaults($domainConfig)
    {
        $domainConfig->setUserAgent($this->spApiConfig->userAgent());

        $domainConfig->setHost($this->spApiConfig->spApiBaseUrl);

        return $domainConfig;
    }

    protected function _validateReadyToCreate()
    {
        if (!isset($this->apiClassFqn)) {
            throw new ClientBuilderException("Builder not ready to create: Target API has not yet been set.");
        }
        if (!isset($this->domainConfig)) {
            throw new ClientBuilderException("Builder not ready to create: Domain config has not yet been set.");
        }
    }
}
