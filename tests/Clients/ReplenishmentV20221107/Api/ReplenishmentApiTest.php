<?php

namespace Tests\Clients\ReplenishmentV20221107\Api;

use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Api\ReplenishmentApi;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\AggregationFrequency;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsRequest;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsResponse;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsResponseMetric;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ListOfferMetricsRequest;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ListOfferMetricsRequestFilters;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ListOfferMetricsRequestPagination;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ListOfferMetricsRequestSort;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ListOfferMetricsResponse;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ListOfferMetricsResponseOffer;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ListOfferMetricsSortKey;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Metric;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ProgramType;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\SortOrder;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimeInterval;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimePeriodType;
use Tests\TestCase;

class ReplenishmentApiTest extends TestCase
{
    public function test_listOfferMetrics()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (ReplenishmentApi $replenishmentApi) {
                    return $replenishmentApi->listOfferMetricsWithHttpInfo(
                        new ListOfferMetricsRequest([
                            'filters'   => new ListOfferMetricsRequestFilters([
                                'aggregationFrequency' => AggregationFrequency::YEAR,
                                'timeInterval'         => new TimeInterval([
                                    'startDate' => '2022-01-01T00:00:00Z',
                                    'endDate'   => '2022-12-31T00:00:00Z',
                                ]),
                                'marketplaceId' => 'ATVPDKIKX0DER',
                                'programTypes'  => [
                                    ProgramType::SUBSCRIBE_AND_SAVE,
                                ],
                                'timePeriodType' => TimePeriodType::PERFORMANCE,
                                'asins'          => [
                                    'B07CYBR5GZ',
                                    'B07CYJJW8H',
                                ],
                            ]),
                            'pagination' => new ListOfferMetricsRequestPagination([
                                'limit'  => 2,
                                'offset' => 0,
                            ]),
                            'sort'      => new ListOfferMetricsRequestSort([
                                'order' => SortOrder::ASC,
                                'key'   => ListOfferMetricsSortKey::TOTAL_SUBSCRIPTIONS_REVENUE,
                            ]),
                        ])
                    );
                });
        });

        /**
         * @var ListOfferMetricsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(ListOfferMetricsResponse::class, $response);
        $this->assertNotEmpty($offers = $response->getOffers());
        $this->assertInstanceOf(ListOfferMetricsResponseOffer::class, $offers[0]);
    }


    public function test_getSellingPartnerMetrics()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (ReplenishmentApi $replenishmentApi) {
                    return $replenishmentApi->getSellingPartnerMetricsWithHttpInfo(
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
