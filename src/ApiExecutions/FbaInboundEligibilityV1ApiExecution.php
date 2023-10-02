<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\FbaInboundEligibilityV1\Api\FbaInboundApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the FBA Inbound Eligibility API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/fbainboundeligibility-api-v1-reference
 */
class FbaInboundEligibilityV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getItemEligibilityPreview' => FbaInboundApi::class,
        ];
    }
}
