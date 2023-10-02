<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Api\VendorInvoiceApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Vendor Direct Fulfillment Payments API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-payments-api-v1-reference
 */
class VendorDirectFulfillmentPaymentsV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'submitInvoice' => VendorInvoiceApi::class,
        ];
    }
}
