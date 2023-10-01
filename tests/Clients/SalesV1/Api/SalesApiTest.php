<?php

namespace Tests\Clients\SalesV1\Api;

use Glue\SpApi\OpenAPI\Clients\SalesV1\Api\SalesApi;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Model\GetOrderMetricsResponse;
use Glue\SpApi\OpenAPI\Clients\SalesV1\Model\OrderMetricsInterval;
use Tests\TestCase;

class SalesApiTest extends TestCase
{
    public function test_getOrderMetrics()
    {
        $result = $this->sp_api()
            ->execute(function (SalesApi $salesApi) {
                return $salesApi->getOrderMetricsWithHttpInfo(
                    [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId],
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
