<?php

namespace Tests\Clients\ReportsV20200904\Api;

use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Model\Report;
use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Model\GetReportsResponse;
use Tests\TestCase;

class ReportsApiTest extends TestCase
{
    public function test_getReports()
    {
        $result = $this->sp_api()
            ->reportsV20200904()
            ->execute(function (ReportsApi $reportsApi) {
                return $reportsApi->getReportsWithHttpInfo(
                    // Specific values come from the sandbox spec in models/reports_2020-09-04.json
                    ['FEE_DISCOUNTS_REPORT', 'GET_AFN_INVENTORY_DATA'],
                    ['IN_QUEUE', 'IN_PROGRESS'],
                    [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId],
                    10
                );
            });

        /**
         * @var GetReportsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetReportsResponse::class, $response);
        $this->assertNotEmpty($payload = $response->getPayload());
        $this->assertInstanceOf(Report::class, $report = $payload[0]);
        $this->assertNotEmpty($report->getReportId());
    }
}
