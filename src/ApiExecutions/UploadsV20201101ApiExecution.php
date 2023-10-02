<?php

namespace Glue\SpApi\OpenAPI\ApiExecutions;

use Glue\SpApi\OpenAPI\Clients\UploadsV20201101\Api\UploadsApi;
use Glue\SpApi\OpenAPI\SpApiExecution;

/**
 * SP-API execution class for the Uploads API v2020-11-01. See official documentation:
 * https://developer-docs.amazon.com/sp-api/docs/uploads-api-reference
 */
class UploadsV20201101ApiExecution extends SpApiExecution
{
    public function getOperationToClientDictionary()
    {
        return [
            'createUploadDestinationForResource' => UploadsApi::class,
        ];
    }
}
