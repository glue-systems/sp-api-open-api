<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentTransactionsV20211228\Api\VendorTransactionApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Vendor Direct Fulfillment Transactions API v2021-12-28. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-transactions-api-2021-12-28-reference
 */
class VendorDirectFulfillmentTransactionsV20211228ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getTransactionStatus' => VendorTransactionApi::class,
        ];
    }
}
