<?php

namespace Glue\SPAPI\OpenAPI;

use Glue\SPAPI\OpenAPI\Clients\DefinitionsProductTypes\Api\DefinitionsApi;
use Glue\SPAPI\OpenAPI\Clients\ListingsItems\Api\ListingsApi;
use Glue\SPAPI\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SPAPI\OpenAPI\Clients\SupplySources\Api\SupplySourcesApi;

interface ClientFactoryContract
{
    /**
     * @return SupplySourcesApi
     */
    public function createSupplySourcesApiClient();

    /**
     * @return ListingsApi
     */
    public function createItemsListingsApiClient();

    /**
     * @return OrdersV0Api
     */
    public function createOrdersV0ApiClient();

    /**
     * @return DefinitionsApi
     */
    public function createDefinitionsProductTypesApiClient();
}
