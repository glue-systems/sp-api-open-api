<?php

namespace Glue\SPAPI\OpenAPI\Services\RDT;

use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;

interface RestrictedDataTokenProviderContract
{
    /**
     * Make a provider callback for retrieving a Restricted Data Token (RDT)
     * based on the RDT request argument.
     *
     * @param CreateRestrictedDataTokenRequest $rdtRequest
     * @return callable
     */
    public function fromRdtRequest(CreateRestrictedDataTokenRequest $rdtRequest);
}
