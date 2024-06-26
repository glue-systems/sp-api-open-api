<?php

namespace Tests\Clients\VendorDirectFulfillmentInventoryV1\Api;

use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Api\UpdateInventoryApi;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Model\InventoryUpdate;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Model\ItemDetails;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Model\ItemQuantity;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Model\PartyIdentification;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Model\SubmitInventoryUpdateRequest;
use Glue\SpApi\OpenAPI\Clients\VendorDirectFulfillmentInventoryV1\Model\SubmitInventoryUpdateResponse;
use Tests\TestCase;

class UpdateInventoryApiTest extends TestCase
{
    public function test_submitInventoryUpdate()
    {
        $result = $this->tryButSkipIfUnauthorized(
            function () {
                return $this->sp_api()
                    ->vendorDirectFulfillmentInventoryV1()
                    ->execute(function (UpdateInventoryApi $updateInventoryApi) {
                        return $updateInventoryApi->submitInventoryUpdateWithHttpInfo(
                            'FAKE-WAREHOUSE-123',
                            new SubmitInventoryUpdateRequest([
                                'inventory' => new InventoryUpdate([
                                    'sellingParty' => new PartyIdentification([
                                        'partyId' => 'VENDORID',
                                    ]),
                                    'isFullUpdate' => false,
                                    'items'        => [
                                        new ItemDetails([
                                            'buyerProductIdentifier'  => 'ABCD4562',
                                            'vendorProductIdentifier' => '7Q89K11',
                                            'availableQuantity'       => new ItemQuantity([
                                                'amount'        => 10,
                                                'unitOfMeasure' => 'Each',
                                            ]),
                                            'isObsolete'              => false,
                                        ]),
                                    ],
                                ]),
                            ])
                        );
                    });
            }
        );

        /**
         * @var SubmitInventoryUpdateResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 202);
        $this->assertInstanceOf(SubmitInventoryUpdateResponse::class, $response);
        $this->assertNotEmpty($response->getPayload()->getTransactionId());
    }
}
