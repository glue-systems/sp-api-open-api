<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\ServicesV1\Api\ServiceApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Services API v1. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/services-api-v1-reference
 */
class ServicesV1ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'getServiceJobByServiceJobId'                      => ServiceApi::class,
            'cancelServiceJobByServiceJobId'                   => ServiceApi::class,
            'completeServiceJobByServiceJobId'                 => ServiceApi::class,
            'getServiceJobs'                                   => ServiceApi::class,
            'addAppointmentForServiceJobByServiceJobId'        => ServiceApi::class,
            'rescheduleAppointmentForServiceJobByServiceJobId' => ServiceApi::class,
            'assignAppointmentResources'                       => ServiceApi::class,
            'setAppointmentFulfillmentData'                    => ServiceApi::class,
            'getRangeSlotCapacity'                             => ServiceApi::class,
            'getFixedSlotCapacity'                             => ServiceApi::class,
            'updateSchedule'                                   => ServiceApi::class,
            'createReservation'                                => ServiceApi::class,
            'updateReservation'                                => ServiceApi::class,
            'cancelReservation'                                => ServiceApi::class,
            'getAppointmmentSlotsByJobId'                      => ServiceApi::class,
            'getAppointmentSlots'                              => ServiceApi::class,
            'createServiceDocumentUploadDestination'           => ServiceApi::class,
        ];
    }
}
