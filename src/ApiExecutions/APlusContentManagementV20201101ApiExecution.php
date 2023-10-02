<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Api\AplusContentApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the A+ Content Management API v2020-11-01. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/selling-partner-api-for-a-content-management
 */
class APlusContentManagementV20201101ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'searchContentDocuments'                => AplusContentApi::class,
            'createContentDocument'                 => AplusContentApi::class,
            'getContentDocument'                    => AplusContentApi::class,
            'updateContentDocument'                 => AplusContentApi::class,
            'listContentDocumentAsinRelations'      => AplusContentApi::class,
            'postContentDocumentAsinRelations'      => AplusContentApi::class,
            'validateContentDocumentAsinRelations'  => AplusContentApi::class,
            'searchContentPublishRecords'           => AplusContentApi::class,
            'postContentDocumentApprovalSubmission' => AplusContentApi::class,
            'postContentDocumentSuspendSubmission'  => AplusContentApi::class,
        ];
    }
}
