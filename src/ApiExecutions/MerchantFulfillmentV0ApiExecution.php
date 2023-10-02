<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\MerchantFulfillmentV0\Api\MerchantFulfillmentApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Merchant Fulfillment API v0. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/merchant-fulfillment-api-v0-reference
 */
class MerchantFulfillmentV0ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getEligibleShipmentServicesOld' => MerchantFulfillmentApi::class,
            'getEligibleShipmentServices'    => MerchantFulfillmentApi::class,
            'getShipment'                    => MerchantFulfillmentApi::class,
            'cancelShipment'                 => MerchantFulfillmentApi::class,
            'cancelShipmentOld'              => MerchantFulfillmentApi::class,
            'createShipment'                 => MerchantFulfillmentApi::class,
            'getAdditionalSellerInputsOld'   => MerchantFulfillmentApi::class,
            'getAdditionalSellerInputs'      => MerchantFulfillmentApi::class,
        ];
    }
}
