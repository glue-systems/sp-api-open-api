<?php

namespace Tests\Clients\VendorDirectFulfillmentOrdersV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\GetOrdersResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\Order;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentOrdersV1\Model\OrderList;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\Address;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\InvoiceDetail;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\InvoiceItem;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\ItemQuantity;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\Money;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\PartyIdentification;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\SubmitInvoiceRequest;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\SubmitInvoiceResponse;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\TaxDetail;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\TaxRegistrationDetail;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentPaymentsV1\Model\TransactionReference;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class VendorInvoiceApiTest extends TestCase
{
    /**
     * @var SpApi
     */
    public $spApi;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->spApi = $this->buildSpApiContainer();
    }

    public function test_submitInvoice()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->vendorDirectFulfillmentPaymentsV1()->submitInvoiceWithHttpInfo(
                new SubmitInvoiceRequest([
                    'invoices' => [
                        new InvoiceDetail([
                            'invoiceNumber' => '0092590411',
                            'invoiceDate' => '2020-03-13T11:16:24Z',
                            'remitToParty' => new PartyIdentification([
                                'partyId' => 'YourVendorCode',
                                'address' => new Address([
                                    'name' => 'vendor name',
                                    'addressLine1' => 'vendor address 1',
                                    'addressLine2' => 'vendor address 2',
                                    'addressLine3' => 'vendor address 3',
                                    'city' => 'DECity',
                                    'county' => 'Schwabing',
                                    'district' => 'München',
                                    'stateOrRegion' => 'Bayern',
                                    'postalCode' => 'DEPostCode',
                                    'countryCode' => 'DE',
                                ]),
                                'taxRegistrationDetails' => [
                                    new TaxRegistrationDetail([
                                        'taxRegistrationType'   => 'VAT',
                                        'taxRegistrationNumber' => 'DE123456789',
                                    ])
                                ],
                            ]),
                            'shipFromParty' => new PartyIdentification([
                                'partyId' => 'ABCD',
                            ]),
                            'billToParty' => new PartyIdentification([
                                'partyId' => '5450534005838',
                                'address' => new Address([
                                    'name' => 'Amazon EU SARL',
                                    'addressLine1' => 'Marcel-Breuer-Str. 12',
                                    'city' => 'München',
                                    'county' => 'Schwabing',
                                    'district' => 'München',
                                    'stateOrRegion' => 'Bayern',
                                    'postalCode' => '80807',
                                    'countryCode' => 'DE',
                                ]),
                                'taxRegistrationDetails' => [
                                    new TaxRegistrationDetail([
                                        'taxRegistrationType' => 'VAT',
                                        'taxRegistrationNumber' => 'DE814584193',
                                        'taxRegistrationAddress' => new Address([
                                            'name' => 'Amazon EU SARL',
                                            'addressLine1' => 'Marcel-Breuer-Str. 12',
                                            'city' => 'München',
                                            'stateOrRegion' => 'Bayern',
                                            'postalCode' => '80807',
                                            'countryCode' => 'DE',
                                        ]),
                                        'taxRegistrationMessage' => 'txmessage'
                                    ]),
                                ],
                            ]),
                            'shipToCountryCode' => 'DE',
                            'paymentTermsCode'  => 'Basic',
                            'invoiceTotal' => new Money([
                                'currencyCode' => 'EUR',
                                'amount'       => '1428.00',
                            ]),
                            'taxTotals' => [
                                new TaxDetail([
                                    'taxType' => 'CGST',
                                    'taxRate' => '0.19',
                                    'taxAmount' => new Money([
                                        'currencyCode' => 'EUR',
                                        'amount'       => '228.00',
                                    ]),
                                    'taxableAmount' => new Money([
                                        'currencyCode' => 'EUR',
                                        'amount'       => '1200.00',
                                    ]),
                                ]),
                            ],
                            'items' => [
                                new InvoiceItem([
                                    'itemSequenceNumber' => '1',
                                    'buyerProductIdentifier' => 'B00IVLAABC',
                                    'invoicedQuantity' => new ItemQuantity([
                                        'amount' => 1,
                                        'unitOfMeasure' => 'Each',
                                    ]),
                                    'netCost' => new Money([
                                        'currencyCode' => 'EUR',
                                        'amount'       => '1200.00',
                                    ]),
                                    'purchaseOrderNumber' => 'D3rC3KTxG',
                                    'vendorOrderNumber' => '0092590411',
                                    'hsnCode' => '76.06.92.99.00',
                                    'taxDetails' => [
                                        new TaxDetail([
                                            'taxType' => 'CGST',
                                            'taxRate' => '0.19',
                                            'taxAmount' => new Money([
                                                'currencyCode' => 'EUR',
                                                'amount'       => '228.00',
                                            ]),
                                            'taxableAmount' => new Money([
                                                'currencyCode' => 'EUR',
                                                'amount'       => '1200.00',
                                            ]),
                                        ]),
                                    ],
                                ]),
                            ],
                        ]),
                    ],
                ])
            );
        });

        /**
         * @var SubmitInvoiceResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 202);
        $this->assertInstanceOf(SubmitInvoiceResponse::class, $response);
        $this->assertInstanceOf(TransactionReference::class, $transactionReference = $response->getPayload());
        $this->assertNotEmpty($transactionReference->getTransactionId());
    }
}
