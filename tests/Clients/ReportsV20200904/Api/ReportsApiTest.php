<?php

namespace Tests\Clients\ReportsV20200904\Api;

use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Model\Report;
use Glue\SPAPI\OpenAPI\Clients\ReportsV20200904\Model\GetReportsResponse;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactory;
use Tests\TestCase;

class ReportsApiTest extends TestCase
{
    /**
     * @var ClientFactory
     */
    public $clientFactory;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->clientFactory = $this->buildClientFactory();
    }

    public function test_getReports()
    {
        $reportsApi  = $this->clientFactory->createReportsV20200904ApiClient();

        $result = $reportsApi->getReportsWithHttpInfo(
            // Specific values come from the sandbox spec in models/reports_2020-09-04.json
            ['FEE_DISCOUNTS_REPORT', 'GET_AFN_INVENTORY_DATA'],
            ['IN_QUEUE', 'IN_PROGRESS'],
            [$this->clientFactory->getSpApiConfig()->marketplaceId],
            10
        );

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
