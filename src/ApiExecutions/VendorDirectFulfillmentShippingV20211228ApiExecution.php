<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\CustomerInvoicesApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentShippingV20211228\Api\VendorShippingLabelsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Vendor Direct Fulfillment Shipping API v2021-12-28. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/vendor-direct-fulfillment-shipping-api-2021-12-28-reference
 */
class VendorDirectFulfillmentShippingV20211228ApiExecution extends SpApiExecution
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
            'createShippingLabels'       => VendorShippingLabelsApi::class,

            'getCustomerInvoices' => CustomerInvoicesApi::class,
            'getCustomerInvoice'  => CustomerInvoicesApi::class,
        ];
    }
}
