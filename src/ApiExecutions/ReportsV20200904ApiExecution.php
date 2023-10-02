<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\ReportsV20200904\Api\ReportsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Reports API v2020-09-04. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/reports-api-v2020-09-01-reference
 */
class ReportsV20200904ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getReports'           => ReportsApi::class,
            'createReport'         => ReportsApi::class,
            'getReport'            => ReportsApi::class,
            'cancelReport'         => ReportsApi::class,
            'getReportSchedules'   => ReportsApi::class,
            'createReportSchedule' => ReportsApi::class,
            'getReportSchedule'    => ReportsApi::class,
            'cancelReportSchedule' => ReportsApi::class,
            'getReportDocument'    => ReportsApi::class,
        ];
    }
}
