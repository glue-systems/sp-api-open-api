<?php

namespace Glue\SPAPI\OpenAPI\Services\Factory;

use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as ShipmentV0Api;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SPAPI\OpenAPI\Clients\SupplySources\Api\SupplySourcesApi;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SPAPI\OpenAPI\Services\SPAPIConfig;

interface ClientFactoryContract
{
    /**
     * @return SPAPIConfig
     */
    public function getConfig();

    /**
     * @return SupplySourcesApi
     */
    public function createSupplySourcesApiClient();

    /**
     * @return ListingsItemsV20200901Api
     */
    public function createListingsItemsV20200901ApiClient();

    /**
     * @return OrdersV0Api
     */
    public function createOrdersV0ApiClient();

    /**
     * @return ShipmentV0Api
     */
    public function createShipmentV0ApiClient();

    /**
     * @return DefinitionsProductTypesV20200901Api
     */
    public function createDefinitionsProductTypesV20200901ApiClient();

    /**
     * @return TokensV20210301Api
     */
    public function createTokensV20210301ApiClient();

    /**
     * @return FeedsV20200904Api
     */
    public function createFeedsV20200904ApiClient();

    /**
     * @return FeedsV20210630Api
     */
    public function createFeedsV20210630ApiClient();

    /**
     * @return ReportsV20200904Api
     */
    public function createReportsV20200904ApiClient();

    /**
     * @return ReportsV20210630Api
     */
    public function createReportsV20210630ApiClient();
}
