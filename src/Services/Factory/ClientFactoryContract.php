<?php

namespace Glue\SPAPI\OpenAPI\Services\Factory;

use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypes\Api\DefinitionsApi;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsApiV20200904;
use Glue\SPAPI\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsApiV20210630;
use Glue\SPAPI\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsApiV20200901;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsApiV20200904;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsApiV20210630;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as ShipmentV0Api;
use Glue\SPAPI\OpenAPI\Clients\SupplySources\Api\SupplySourcesApi;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensApiV20210301;
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
     * @return ListingsApiV20200901
     */
    public function createListingsItemsApiV20200901Client();

    /**
     * @return OrdersV0Api
     */
    public function createOrdersV0ApiClient();

    /**
     * @return ShipmentV0Api
     */
    public function createShipmentV0ApiClient();

    /**
     * @return DefinitionsApi
     */
    public function createDefinitionsProductTypesApiClient();

    /**
     * @return TokensApiV20210301
     */
    public function createTokensApiV20210301Client();

    /**
     * @return FeedsApiV20200904
     */
    public function createFeedsApiV20200904Client();

    /**
     * @return FeedsApiV20210630
     */
    public function createFeedsApiV20210630Client();

    /**
     * @return ReportsApiV20200904
     */
    public function createReportsApiV20200904Client();

    /**
     * @return ReportsApiV20210630
     */
    public function createReportsApiV20210630Client();
}
