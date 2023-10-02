<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\OrdersV0Api;
use Glue\SpApi\OpenAPI\Clients\OrdersV0\Api\ShipmentApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Orders API v0. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/orders-api-v0-reference
 */
class OrdersV0ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getOrders'                => OrdersV0Api::class,
            'getOrder'                 => OrdersV0Api::class,
            'getOrderBuyerInfo'        => OrdersV0Api::class,
            'getOrderAddress'          => OrdersV0Api::class,
            'getOrderItems'            => OrdersV0Api::class,
            'getOrderItemsBuyerInfo'   => OrdersV0Api::class,
            'getOrderRegulatedInfo'    => OrdersV0Api::class,
            'updateVerificationStatus' => OrdersV0Api::class,
            'confirmShipment'          => OrdersV0Api::class,

            'updateShipmentStatus' => ShipmentApi::class,
        ];
    }
}
