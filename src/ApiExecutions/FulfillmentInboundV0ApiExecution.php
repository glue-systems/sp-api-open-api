<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\FulfillmentInboundV0\Api\FbaInboundApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Fulfillment Inbound API v0. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/fulfillment-inbound-api-v0-reference
 */
class FulfillmentInboundV0ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getInboundGuidance'           => FbaInboundApi::class,
            'createInboundShipmentPlan'    => FbaInboundApi::class,
            'updateInboundShipment'        => FbaInboundApi::class,
            'createInboundShipment'        => FbaInboundApi::class,
            'getPreorderInfo'              => FbaInboundApi::class,
            'confirmPreorder'              => FbaInboundApi::class,
            'getPrepInstructions'          => FbaInboundApi::class,
            'getTransportDetails'          => FbaInboundApi::class,
            'putTransportDetails'          => FbaInboundApi::class,
            'voidTransport'                => FbaInboundApi::class,
            'estimateTransport'            => FbaInboundApi::class,
            'confirmTransport'             => FbaInboundApi::class,
            'getLabels'                    => FbaInboundApi::class,
            'getBillOfLading'              => FbaInboundApi::class,
            'getShipments'                 => FbaInboundApi::class,
            'getShipmentItemsByShipmentId' => FbaInboundApi::class,
            'getShipmentItems'             => FbaInboundApi::class,
        ];
    }
}
