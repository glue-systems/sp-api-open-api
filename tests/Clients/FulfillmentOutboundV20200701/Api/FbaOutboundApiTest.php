<?php

namespace Tests\Clients\FulfillmentOutboundV20200701\Api;

use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Address;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentPreview;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\GetFulfillmentPreviewItem;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\GetFulfillmentPreviewRequest;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\GetFulfillmentPreviewResponse;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\GetFulfillmentPreviewResult;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money;
use Tests\TestCase;

class FbaOutboundApiTest extends TestCase
{
    public function test_getFulfillmentPreview()
    {
        $this->markTestIncomplete('Should revisit after regenerating clients via openapi-generator-cli option --additional-properties=enumUnknownDefaultCase=true');

        $result = $this->sp_api()->execute(function () {
            return $this->sp_api()->fulfillmentOutboundV20200701()
                ->getFulfillmentPreviewWithHttpInfo(
                    new GetFulfillmentPreviewRequest([
                        'marketplaceId' => $this->sp_api()->getSpApiConfig()->defaultMarketplaceId,
                        'address'       => new Address([
                            'name'          => 'Walts TV and Appliance',
                            'addressLine1'  => '1746 W Ruby Dr',
                            'addressLine2'  => 'STE 110',
                            'city'          => 'Tempe',
                            'stateOrRegion' => 'AZ',
                            'postalCode'    => '85284',
                            'countryCode'   => 'US',
                            'phone'         => '5555555555',
                        ]),
                        'items'         => [
                            new GetFulfillmentPreviewItem([
                                'sellerSku'                    => 'FAKE-SKU-123',
                                'quantity'                     => 1,
                                'sellerFulfillmentOrderItemId' => 'FAKE-ORDER-ITEM-ID',
                                'perUnitDeclaredValue'         => new Money([
                                    'currencyCode' => 'USD',
                                    'value'        => '12.34'
                                ]),
                            ]),
                        ],
                    ])
                );
        });

        /**
         * @var GetFulfillmentPreviewResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetFulfillmentPreviewResponse::class, $response);
        $this->assertInstanceOf(GetFulfillmentPreviewResult::class, $fulfillmentPreviewResult = $response->getPayload());
        $this->assertNotEmpty($fulfillmentPreviews = $fulfillmentPreviewResult->getFulfillmentPreviews());
        $this->assertInstanceOf(FulfillmentPreview::class, $fulfillmentPreviews[0]);
    }
}
