<?php

namespace Glue\SPAPI\OpenAPI\Services\Factory;

use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration as DefinitionsProductTypesV20200901Config;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901\Configuration as ListingsItemsV20200901Config;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Configuration as OrdersV0Config;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Configuration as ReportsV20200904Config;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20210630\Configuration as ReportsV20210630Config;
use Glue\SPAPI\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SPAPI\OpenAPI\Clients\SupplySourcesV20200701\Configuration as SupplySourcesV20200701Config;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Configuration as TokensV20210301Config;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SPAPI\OpenAPI\Services\Builder\ClientBuilderContract;
use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;

class ClientFactory implements ClientFactoryContract
{
    /**
     * @var ClientBuilderContract
     */
    protected $builder;

    /**
     * @var SPAPIConfig
     */
    protected $spApiConfig;

    public function __construct(
        ClientBuilderContract $builder,
        SPAPIConfig $spApiConfig
    ) {
        $this->builder      = $builder;
        $this->spApiConfig  = $spApiConfig;
    }

    /**
     * Get the global SP-API config object.
     *
     * @return SPAPIConfig
     */
    public function getSpApiConfig()
    {
        return clone $this->spApiConfig;
    }

    /**
     * Make a provider callback for retrieving a Restricted Data Token (RDT)
     * based on the RDT request argument.
     *
     * @param CreateRestrictedDataTokenRequest|null $rdtRequest
     * @return callable|null
     */
    public function makeRdtProviderFromRequest(CreateRestrictedDataTokenRequest $rdtRequest = null)
    {
        if (is_null($rdtRequest)) {
            return null;
        }

        return function () use ($rdtRequest) {
            $tokensApi           = $this->createTokensV20210301ApiClient();
            $rdtResponse         = $tokensApi->createRestrictedDataToken($rdtRequest);
            return $rdtResponse->getRestrictedDataToken();
        };
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
     * @return OrdersV0Api
     */
    public function createOrdersV0ApiClient(
        OrdersV0Config $domainConfig = null,
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->builder
            ->forApi(OrdersV0Api::class)
            ->withConfig($domainConfig)
            ->withRdtProvider($this->makeRdtProviderFromRequest($rdtRequest))
            ->createClient();
    }

    /**
     * Note that OrdersV0ShipmentApi does not have its own Configuration class,
     * as it originates the same models/ordersV0.json spec.
     *
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
     * @return ReportsV20200904Api
     */
    public function createReportsV20200904ApiClient(
        ReportsV20200904Config $domainConfig = null,
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->builder
            ->forApi(ReportsV20200904Api::class)
            ->withConfig($domainConfig)
            ->withRdtProvider($this->makeRdtProviderFromRequest($rdtRequest))
            ->createClient();
    }

    /**
     * @return ReportsV20210630Api
     */
    public function createReportsV20210630ApiClient(
        ReportsV20210630Config $domainConfig = null,
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->builder
            ->forApi(ReportsV20210630Api::class)
            ->withConfig($domainConfig)
            ->withRdtProvider($this->makeRdtProviderFromRequest($rdtRequest))
            ->createClient();
    }
}
