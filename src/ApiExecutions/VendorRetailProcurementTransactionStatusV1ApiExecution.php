<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\VendorTransactionStatusV1\Api\VendorTransactionApi as ApiVendorTransactionApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Vendor Transaction Status API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/vendor-transaction-status-api-v1-reference
 */
class VendorRetailProcurementTransactionStatusV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getTransaction' => ApiVendorTransactionApi::class,
        ];
    }
}
