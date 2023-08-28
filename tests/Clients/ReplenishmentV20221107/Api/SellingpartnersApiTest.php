<?php

namespace Tests\Clients\ReplenishmentV20221107\Api;

use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\SellingpartnersApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\AggregationFrequency;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsRequest;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsResponse;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsResponseMetric;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Metric;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ProgramType;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimeInterval;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimePeriodType;
use Tests\TestCase;

class SellingpartnersApiTest extends TestCase
{
    public function test_getSellingPartnerMetrics()
    {
        $result = $this->sp_api()
            ->replenishmentV20221107Sellingpartners(function (SellingpartnersApi $sellingpartnersApi) {
                return $sellingpartnersApi->getSellingPartnerMetricsWithHttpInfo(
                    new GetSellingPartnerMetricsRequest([
                        'aggregationFrequency' => AggregationFrequency::YEAR,
                        'timeInterval'         => new TimeInterval([
                            'startDate' => '2022-01-01T00:00:00Z',
                            'endDate'   => '2022-12-31T00:00:00Z',
                        ]),
                        'metrics'          => [
                            Metric::TOTAL_SUBSCRIPTIONS_REVENUE,
                        ],
                        'timePeriodType' => TimePeriodType::PERFORMANCE,
                        'marketplaceId' => 'ATVPDKIKX0DER',
                        'programTypes'  => [
                            ProgramType::SUBSCRIBE_AND_SAVE,
                        ],
                    ])
                );
            });

        /**
         * @var GetSellingPartnerMetricsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetSellingPartnerMetricsResponse::class, $response);
        $this->assertNotEmpty($metrics = $response->getMetrics());
        $this->assertInstanceOf(GetSellingPartnerMetricsResponseMetric::class, $metrics[0]);
        $this->assertNotEmpty($metrics[0]->getNotDeliveredDueToOOS());
    }
}
