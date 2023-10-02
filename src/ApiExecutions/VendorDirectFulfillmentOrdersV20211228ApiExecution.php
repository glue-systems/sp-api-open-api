<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV20211228\Api\VendorOrdersApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Vendor Direct Fulfillment Orders API v2021-12-28. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-orders-api-2021-12-28-reference
 */
class VendorDirectFulfillmentOrdersV20211228ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getOrders'             => VendorOrdersApi::class,
            'getOrder'              => VendorOrdersApi::class,
            'submitAcknowledgement' => VendorOrdersApi::class,
        ];
    }
}
