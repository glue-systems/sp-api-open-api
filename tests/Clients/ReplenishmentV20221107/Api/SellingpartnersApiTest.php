<?php

namespace Tests\Clients\ReplenishmentV20221107\Api;

use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\ApiException;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\AggregationFrequency;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsRequest;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsResponse;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\GetSellingPartnerMetricsResponseMetric;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\Metric;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\ProgramType;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimeInterval;
use Glue\SpApi\OpenAPI\Clients\ReplenishmentV20221107\Model\TimePeriodType;
use Glue\SpApi\OpenAPI\Container\SpApi;
use GuzzleHttp\Psr7\Stream;
use Tests\TestCase;

class SellingpartnersApiTest extends TestCase
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

    public function test_getSellingPartnerMetrics()
    {
        $sellingpartnersApi = $this->spApi->replenishmentV20221107Sellingpartners();

        try {
            $result = $sellingpartnersApi->getSellingPartnerMetricsWithHttpInfo(
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
        } catch (ApiException $ex) {
            $body = $ex->getResponseBody();
            if ($body instanceof Stream) {
                $contents = $body->getContents();
            }
            if ($ex->getCode() !== 400) {
                throw $ex;
            }
            $this->markTestSkipped('Sandbox not yet available for A+ Content Management API v2020-11-01.');
        }

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
