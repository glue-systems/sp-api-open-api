<?php

namespace Tests\Clients\SalesV1\Api;

use Glue\SpApi\OpenAPI\Clients\SalesV1\Model\GetOrderMetricsResponse;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Model\OrderMetricsInterval;
use Glue\SpApi\OpenAPI\Container\SpApi;
use Tests\TestCase;

class SalesApiTest extends TestCase
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

    public function test_getOrderMetrics()
    {
        $result = $this->spApi->execute(function () {
            return $this->spApi->salesV1()->getOrderMetricsWithHttpInfo(
                [$this->spApi->getSpApiConfig()->marketplaceId],
                '2018-09-01T00:00:00-07:00--2018-09-04T00:00:00-07:00',
                'Total'
            );
        });

        /**
         * @var GetOrderMetricsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetOrderMetricsResponse::class, $response);
        $this->assertNotEmpty($orderMetricsIntervals = $response->getPayload());
        $this->assertInstanceOf(OrderMetricsInterval::class, $orderMetricsIntervals[0]);
    }
}
