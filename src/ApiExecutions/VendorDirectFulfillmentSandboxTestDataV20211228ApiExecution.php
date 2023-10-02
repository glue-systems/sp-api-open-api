<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentSandboxDataV20211228\Api\VendorDFSandboxtransactionstatusApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Vendor Direct Fulfillment Sandbox Test Data API v2021-10-28. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-sandbox-test-data-api-2021-10-28-reference
 */
class VendorDirectFulfillmentSandboxTestDataV20211228ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'generateOrderScenarios' => VendorDFSandboxApi::class,

            'getOrderScenarios' => VendorDFSandboxtransactionstatusApi::class,
        ];
    }
}
