<?php

namespace Glue\SpApi\OpenAPI\Container;

use Glue\SpApi\OpenAPI\Clients\DefinitionsProductTypesV20200901\Api\DefinitionsApi as DefinitionsProductTypesV20200901Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20200904\Api\FeedsApi as FeedsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\FeedsV20210630\Api\FeedsApi as FeedsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\ListingsItemsV20200901\Api\ListingsApi as ListingsItemsV20200901Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi as OrdersV0ShipmentApi;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi as ReportsV20200904Api;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi as ReportsV20210630Api;
use Glue\SpApi\OpenAPI\Clients\SupplySourcesV20200701\Api\SupplySourcesApi as SupplySourcesV20200701Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Api\TokensApi as TokensV20210301Api;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\SpApiConfig;

interface SpApiInterface
{
    /**
     * Get the global SP-API config object.
     *
     * @return SpApiConfig
     */
    public function getSpApiConfig();


    /**
     * @return DefinitionsProductTypesV20200901Api
     */
    public function definitionsProductTypesV20200901();

    /**
     * @return FeedsV20200904Api
     */
    public function feedsV20200904();

    /**
     * @return FeedsV20210630Api
     */
    public function feedsV20210630();

    /**
     * @return ListingsItemsV20200901Api
     */
    public function listingsItemsV20200901();

    /**
     * @return OrdersV0Api
     */
    public function ordersV0(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return OrdersV0ShipmentApi
     */
    public function ordersV0Shipment();

    /**
     * @return ReportsV20200904Api
     */
    public function reportsV20200904(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return ReportsV20210630Api
     */
    public function reportsV20210630(
        CreateRestrictedDataTokenRequest $rdtRequest = null
    );

    /**
     * @return SupplySourcesV20200701Api
     */
    public function supplySourcesV20200701();

    /**
     * @return TokensV20210301Api
     */
    public function tokensV20210301();
}
