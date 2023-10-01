<?php

namespace Tests\Clients\EasyShipV20220323\Api;

use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Api\EasyShipApi;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Dimensions;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\ListHandoverSlotsRequest;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\ListHandoverSlotsResponse;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\TimeSlot;
use Glue\SpApi\OpenAPI\Clients\EasyShipV20220323\Model\Weight;
use Tests\TestCase;

class EasyShipApiTest extends TestCase
{
    public function test_listHandoverSlots()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (EasyShipApi $easyShipApi) {
                    return $easyShipApi->listHandoverSlotsWithHttpInfo(
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
                });
        });

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
