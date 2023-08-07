<?php

namespace Glue\SpApi\OpenAPI\Services\Factory;

use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Configuration as DefinitionsProductTypesV20200901Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Configuration as FeedsV20200904Config;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Configuration as FeedsV20210630Config;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Configuration as ListingsItemsV20200901Config;
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
use Glue\SpApi\OpenAPI\Services\SpApiConfig;

interface ClientFactoryContract
{
    /**
     * Get the global SP-API config object.
     *
     * @return SpApiConfig
     */
    public function getSpApiConfig();

    /**
     * @return SupplySourcesV20200701Api
     */
    public function createSupplySourcesV20200701ApiClient(
        SupplySourcesV20200701Config $domainConfig = null
    );

    /**
     * @return ListingsItemsV20200901Api
     */
    public function createListingsItemsV20200901ApiClient(
        ListingsItemsV20200901Config $domainConfig = null
    );

    /**
     * @return OrdersV0Api
     */
    public function createOrdersV0ApiClient(
        OrdersV0Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return OrdersV0ShipmentApi
     */
    public function createOrdersV0ShipmentApiClient(
        OrdersV0Config $domainConfig = null
    );

    /**
     * @return DefinitionsProductTypesV20200901Api
     */
    public function createDefinitionsProductTypesV20200901ApiClient(
        DefinitionsProductTypesV20200901Config $domainConfig = null
    );

    /**
     * @return TokensV20210301Api
     */
    public function createTokensV20210301ApiClient(
        TokensV20210301Config $domainConfig = null
    );

    /**
     * @return FeedsV20200904Api
     */
    public function createFeedsV20200904ApiClient(
        FeedsV20200904Config $domainConfig = null
    );

    /**
     * @return FeedsV20210630Api
     */
    public function createFeedsV20210630ApiClient(
        FeedsV20210630Config $domainConfig = null
    );

    /**
     * @return ReportsV20200904Api
     */
    public function createReportsV20200904ApiClient(
        ReportsV20200904Config $domainConfig = null,
        callable $rdtProvider = null
    );

    /**
     * @return ReportsV20210630Api
     */
    public function createReportsV20210630ApiClient(
        ReportsV20210630Config $domainConfig = null,
        callable $rdtProvider = null
    );
}
