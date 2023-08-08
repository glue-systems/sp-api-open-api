<?php

namespace Tests\Clients\FulfillmentOutboundV20200701\Api;

use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Address;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\FulfillmentPreview;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\GetFulfillmentPreviewItem;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\GetFulfillmentPreviewRequest;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\GetFulfillmentPreviewResponse;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\GetFulfillmentPreviewResult;
use Glue\SpApi\OpenAPI\Clients\FulfillmentOutboundV20200701\Model\Money;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class FbaOutboundApiTest extends TestCase
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

    public function test_getFulfillmentPreview()
    {
        $this->markTestIncomplete('Should revisit after regenerating clients via openapi-generator-cli option --additional-properties=enumUnknownDefaultCase=true');

        $fbaOutboundApi = $this->spApi->fulfillmentOutboundV20200701();

        $result = $fbaOutboundApi->getFulfillmentPreviewWithHttpInfo(
            new GetFulfillmentPreviewRequest([
                'marketplaceId' => $this->spApi->getSpApiConfig()->marketplaceId,
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
