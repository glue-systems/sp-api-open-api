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
    protected $config;

    public function __construct(
        ClientBuilderContract $builder,
        SPAPIConfig $config
    ) {
        $this->builder = $builder;
        $this->config  = $config;
    }

    /**
     * @return SPAPIConfig
     */
    public function getConfig()
    {
        return clone $this->config;
    }

    /**
     *
     * @param CreateRestrictedDataTokenRequest|null $rdtRequest
     * @return callable|null
     */
    public function makeRdtProvider(CreateRestrictedDataTokenRequest $rdtRequest = null)
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
        SupplySourcesV20200701Config $configuration = null
    ) {
        return $this->builder
            ->forDomainApi(SupplySourcesV20200701Api::class)
            ->withConfig($configuration)
            ->createClient();
    }

    /**
     * @return ListingsItemsV20200901Api
     */
    public function createListingsItemsV20200901ApiClient(
        ListingsItemsV20200901Config $configuration = null
    ) {
        return $this->builder
            ->forDomainApi(ListingsItemsV20200901Api::class)
            ->withConfig($configuration)
            ->createClient();
    }

    /**
     * @return OrdersV0Api
     */
    public function createOrdersV0ApiClient(
        OrdersV0Config $configuration = null,
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->builder
            ->forDomainApi(OrdersV0Api::class)
            ->withConfig($configuration)
            ->withRdtProvider($this->makeRdtProvider($rdtRequest))
            ->createClient();
    }

    /**
     * Note that OrdersV0ShipmentApi does not have its own Configuration class,
     * as it originates the same models/ordersV0.json spec.
     *
     * @return OrdersV0ShipmentApi
     */
    public function createOrdersV0ShipmentApiClient(
        OrdersV0Config $configuration = null
    ) {
        return $this->builder
            ->forDomainApi(OrdersV0ShipmentApi::class)
            ->withConfig($configuration)
            ->createClient();
    }

    /**
     * @return DefinitionsProductTypesV20200901Api
     */
    public function createDefinitionsProductTypesV20200901ApiClient(
        DefinitionsProductTypesV20200901Config $configuration = null
    ) {
        return $this->builder
            ->forDomainApi(DefinitionsProductTypesV20200901Api::class)
            ->withConfig($configuration)
            ->createClient();
    }

    /**
     * @return TokensV20210301Api
     */
    public function createTokensV20210301ApiClient(
        TokensV20210301Config $configuration = null
    ) {
        return $this->builder
            ->forDomainApi(TokensV20210301Api::class)
            ->withConfig($configuration)
            ->createClient();
    }

    /**
     * @return FeedsV20200904Api
     */
    public function createFeedsV20200904ApiClient(
        FeedsV20200904Config $configuration = null
    ) {
        return $this->builder
            ->forDomainApi(FeedsV20200904Api::class)
            ->withConfig($configuration)
            ->createClient();
    }

    /**
     * @return FeedsV20210630Api
     */
    public function createFeedsV20210630ApiClient(
        FeedsV20210630Config $configuration = null
    ) {
        return $this->builder
            ->forDomainApi(FeedsV20210630Api::class)
            ->withConfig($configuration)
            ->createClient();
    }

    /**
     * @return ReportsV20200904Api
     */
    public function createReportsV20200904ApiClient(
        ReportsV20200904Config $configuration = null,
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->builder
            ->forDomainApi(ReportsV20200904Api::class)
            ->withConfig($configuration)
            ->withRdtProvider($this->makeRdtProvider($rdtRequest))
            ->createClient();
    }

    /**
     * @return ReportsV20210630Api
     */
    public function createReportsV20210630ApiClient(
        ReportsV20210630Config $configuration = null,
        CreateRestrictedDataTokenRequest $rdtRequest = null
    ) {
        return $this->builder
            ->forDomainApi(ReportsV20210630Api::class)
            ->withConfig($configuration)
            ->withRdtProvider($this->makeRdtProvider($rdtRequest))
            ->createClient();
    }
}
