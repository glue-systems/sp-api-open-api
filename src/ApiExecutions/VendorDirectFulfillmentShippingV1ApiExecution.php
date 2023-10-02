<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV1\Api\VendorShippingLabelsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Vendor Direct Fulfillment Shipping API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-shipping-api-v1-reference
 */
class VendorDirectFulfillmentShippingV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'submitShipmentConfirmations' => VendorShippingApi::class,
            'submitShipmentStatusUpdates' => VendorShippingApi::class,
            'getPackingSlips'             => VendorShippingApi::class,
            'getPackingSlip'              => VendorShippingApi::class,

            'getShippingLabels'          => VendorShippingLabelsApi::class,
            'submitShippingLabelRequest' => VendorShippingLabelsApi::class,
            'getShippingLabel'           => VendorShippingLabelsApi::class,

            'getCustomerInvoices' => CustomerInvoicesApi::class,
            'getCustomerInvoice'  => CustomerInvoicesApi::class,

        ];
    }
}
