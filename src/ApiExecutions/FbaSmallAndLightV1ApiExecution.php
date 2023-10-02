<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\FbaSmallAndLightV1\Api\SmallAndLightApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the FBA Small and Light API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/fbasmallandlight-api-v1-reference
 */
class FbaSmallAndLightV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getSmallAndLightEnrollmentBySellerSKU'    => SmallAndLightApi::class,
            'putSmallAndLightEnrollmentBySellerSKU'    => SmallAndLightApi::class,
            'deleteSmallAndLightEnrollmentBySellerSKU' => SmallAndLightApi::class,
            'getSmallAndLightEligibilityBySellerSKU'   => SmallAndLightApi::class,
            'getSmallAndLightFeePreview'               => SmallAndLightApi::class,
        ];
    }
}
