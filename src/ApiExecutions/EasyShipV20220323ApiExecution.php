<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Easy Ship API v2022-03-23. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/easy-ship-api-v2022-03-23-reference
 */
class EasyShipV20220323ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'listHandoverSlots'          => EasyShipApi::class,
            'getScheduledPackage'        => EasyShipApi::class,
            'createScheduledPackage'     => EasyShipApi::class,
            'updateScheduledPackages'    => EasyShipApi::class,
            'createScheduledPackageBulk' => EasyShipApi::class,
        ];
    }
}
