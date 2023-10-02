<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Api\FbaOutboundApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Fulfillment Outbound API v2020-07-01. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/fulfillment-outbound-api-v2020-07-01-reference
 */
class FulfillmentOutboundV20200701ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getFulfillmentPreview'              => FbaOutboundApi::class,
            'listAllFulfillmentOrders'           => FbaOutboundApi::class,
            'createFulfillmentOrder'             => FbaOutboundApi::class,
            'getPackageTrackingDetails'          => FbaOutboundApi::class,
            'listReturnReasonCodes'              => FbaOutboundApi::class,
            'createFulfillmentReturn'            => FbaOutboundApi::class,
            'getFulfillmentOrder'                => FbaOutboundApi::class,
            'updateFulfillmentOrder'             => FbaOutboundApi::class,
            'cancelFulfillmentOrder'             => FbaOutboundApi::class,
            'submitFulfillmentOrderStatusUpdate' => FbaOutboundApi::class,
            'getFeatures'                        => FbaOutboundApi::class,
            'getFeatureInventory'                => FbaOutboundApi::class,
            'getFeatureSKU'                      => FbaOutboundApi::class,
        ];
    }
}
