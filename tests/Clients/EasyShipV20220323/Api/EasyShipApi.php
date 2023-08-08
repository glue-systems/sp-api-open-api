<?php

namespace Tests\Clients\EasyShipV20220323\Api;

use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Dimensions;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\ListHandoverSlotsRequest;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\ListHandoverSlotsResponse;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\TimeSlot;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Weight;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class EasyShipApi extends TestCase
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

    public function test_searchContentDocuments()
    {
        $easyShipApi = $this->spApi->easyShipV20220323();

        $result = $easyShipApi->listHandoverSlotsWithHttpInfo(
            new ListHandoverSlotsRequest([
                'marketplaceId' => 'A21TJRUUN4KGV',
                'amazonOrderId' => '931-2308757-7991048',
                'packageDimensions' => new Dimensions([
                    'length'     => 15.0,
                    'width'      => 10.0,
                    'height'     => 12.0,
                    'unit'       => 'Cm',
                    'identifier' => 'test',
                ]),
                'packageWeight' => new Weight([
                    'value' => 50.0,
                    'unit'  => 'G',
                ]),
            ])
        );

        /**
         * @var ListHandoverSlotsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListHandoverSlotsResponse::class, $response);
        $this->assertNotEmpty($response->getAmazonOrderId());
        $this->assertNotEmpty($timeSlots = $response->getTimeSlots());
        $this->assertInstanceOf(TimeSlot::class, $timeSlots[0]);
    }
}
