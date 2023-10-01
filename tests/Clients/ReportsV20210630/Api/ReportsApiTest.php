<?php

namespace Tests\Clients\ReportsV20210630\Api;

use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Api\ReportsApi;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Model\Report;
use Glue\SpApi\OpenAPI\Clients\ReportsV20210630\Model\GetReportsResponse;
use Tests\TestCase;

class ReportsApiTest extends TestCase
{
    public function test_getReports()
    {
        $result = $this->tryButSkipIfUnauthorized(function () {
            return $this->sp_api()
                ->execute(function (ReportsApi $reportsApi) {
                    return $reportsApi->getReportsWithHttpInfo(
                        // Specific values come from the sandbox spec in models/reports_2021-06-30.json
                        ['FEE_DISCOUNTS_REPORT', 'GET_AFN_INVENTORY_DATA'],
                        ['IN_QUEUE', 'IN_PROGRESS'],
                        [$this->sp_api()->getSpApiConfig()->defaultMarketplaceId],
                        10
                    );
                });
        });

        /**
         * @var GetReportsResponse $response
         */
        list($response, $statusCode, $headers) = $result;

        $this->assertEquals($statusCode, 200);
        $this->assertInstanceOf(GetReportsResponse::class, $response);
        $this->assertNotEmpty($reports = $response->getReports());
        $this->assertInstanceOf(Report::class, $report = $reports[0]);
        $this->assertNotEmpty($report->getReportId());
    }
}
