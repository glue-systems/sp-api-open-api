<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\ShipmentInvoicingV0\Api\ShipmentInvoiceApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Shipment Invoicing API v0. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/shipment-invoicing-api-v0-reference
 */
class ShipmentInvoicingV0ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getShipmentDetails' => ShipmentInvoiceApi::class,
            'submitInvoice'      => ShipmentInvoiceApi::class,
            'getInvoiceStatus'   => ShipmentInvoiceApi::class,
        ];
    }
}
