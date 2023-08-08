<?php

namespace Glue\SpApi\OpenAPI\Services\Factory;

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
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Configuration as ReportsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Configuration as ReportsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Configuration as SupplySourcesV20200701Config;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Configuration as TokensV20210301Config;
use Glue\SpApi\OpenAPI\Services\Builder\ClientBuilderInterface;
use Glue\SpApi\OpenAPI\SpApiConfig;

class ClientFactory implements ClientFactoryInterface
{
    /**
     * @var ClientBuilderInterface
     */
    protected $builder;

    /**
     * @var SpApiConfig
     */
    protected $spApiConfig;

    public function __construct(
        ClientBuilderInterface $builder,
        SpApiConfig $spApiConfig
    ) {
        $this->builder      = $builder;
        $this->spApiConfig  = $spApiConfig;
    }

    /**
     * @return AplusContentV20201101Api
     */
    public function createAplusContentV20201101ApiClient(
        AplusContentV20201101Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(AplusContentV20201101Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return AuthorizationV1Api
     */
    public function createAuthorizationV1ApiClient(
        AuthorizationV1Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(AplusContentV20201101Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return CatalogItemsV0Api
     */
    public function createCatalogItemsV0ApiClient(
        CatalogItemsV0Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(CatalogItemsV0Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return CatalogItemsV20201201Api
     */
    public function createCatalogItemsV20201201ApiClient(
        CatalogItemsV20201201Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(CatalogItemsV20201201Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return DefinitionsProductTypesV20200901Api
     */
    public function createDefinitionsProductTypesV20200901ApiClient(
        DefinitionsProductTypesV20200901Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(DefinitionsProductTypesV20200901Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return EasyShipV20220323Api
     */
    public function createEasyShipV20220323ApiClient(
        EasyShipV20220323Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(EasyShipV20220323Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return FbaInboundEligibilityV1Api
     */
    public function createFbaInboundEligibilityV1ApiClient(
        FbaInboundEligibilityV1Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(FbaInboundEligibilityV1Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return FbaInventoryV1Api
     */
    public function createFbaInventoryV1ApiClient(
        FbaInventoryV1Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(FbaInventoryV1Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return FbaSmallAndLightV1Api
     */
    public function createFbaSmallAndLightV1ApiClient(
        FbaSmallAndLightV1Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(FbaSmallAndLightV1Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return FeedsV20200904Api
     */
    public function createFeedsV20200904ApiClient(
        FeedsV20200904Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(FeedsV20200904Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return FeedsV20210630Api
     */
    public function createFeedsV20210630ApiClient(
        FeedsV20210630Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(FeedsV20210630Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return FinancesV0Api
     */
    public function createFinancesV0ApiClient(
        FinancesV0Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(FinancesV0Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return FulfillmentInboundV0Api
     */
    public function createFulfillmentInboundV0ApiClient(
        FulfillmentInboundV0Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(FulfillmentInboundV0Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return FulfillmentOutboundV20200701Api
     */
    public function createFulfillmentOutboundV20200701ApiClient(
        FulfillmentOutboundV20200701Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(FulfillmentOutboundV20200701Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return ListingsItemsV20200901Api
     */
    public function createListingsItemsV20200901ApiClient(
        ListingsItemsV20200901Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(ListingsItemsV20200901Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return ListingsItemsV20210801Api
     */
    public function createListingsItemsV20210801ApiClient(
        ListingsItemsV20210801Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(ListingsItemsV20210801Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return ListingsRestrictionsV20210801Api
     */
    public function createListingsRestrictionsV20210801ApiClient(
        ListingsRestrictionsV20210801Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(ListingsRestrictionsV20210801Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return MerchantFulfillmentV0Api
     */
    public function createMerchantFulfillmentV0ApiClient(
        MerchantFulfillmentV0Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(MerchantFulfillmentV0Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return NotificationsV1Api
     */
    public function createNotificationsV1ApiClient(
        NotificationsV1Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(NotificationsV1Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return OrdersV0Api
     */
    public function createOrdersV0ApiClient(
        OrdersV0Config $domainConfig = null,
        callable $rdtProvider = null
    ) {
        return $this->builder
            ->forApi(OrdersV0Api::class)
            ->withConfig($domainConfig)
            ->withRdtProvider($rdtProvider)
            ->createClient();
    }

    /**
     * @return OrdersV0ShipmentApi
     */
    public function createOrdersV0ShipmentApiClient(
        OrdersV0Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(OrdersV0ShipmentApi::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return ReportsV20200904Api
     */
    public function createReportsV20200904ApiClient(
        ReportsV20200904Config $domainConfig = null,
        callable $rdtProvider = null
    ) {
        return $this->builder
            ->forApi(ReportsV20200904Api::class)
            ->withConfig($domainConfig)
            ->withRdtProvider($rdtProvider)
            ->createClient();
    }

    /**
     * @return ReportsV20210630Api
     */
    public function createReportsV20210630ApiClient(
        ReportsV20210630Config $domainConfig = null,
        callable $rdtProvider = null
    ) {
        return $this->builder
            ->forApi(ReportsV20210630Api::class)
            ->withConfig($domainConfig)
            ->withRdtProvider($rdtProvider)
            ->createClient();
    }

    /**
     * @return SupplySourcesV20200701Api
     */
    public function createSupplySourcesV20200701ApiClient(
        SupplySourcesV20200701Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(SupplySourcesV20200701Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }

    /**
     * @return TokensV20210301Api
     */
    public function createTokensV20210301ApiClient(
        TokensV20210301Config $domainConfig = null
    ) {
        return $this->builder
            ->forApi(TokensV20210301Api::class)
            ->withConfig($domainConfig)
            ->createClient();
    }
}
