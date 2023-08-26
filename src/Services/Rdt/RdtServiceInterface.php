<?php

namespace Glue\SpApi\OpenAPI\Services\Rdt;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;

interface RdtServiceInterface
{
    /**
     * Make a provider callback for retrieving a Restricted Data Token (RDT)
     * based on the RDT request argument.
     *
     * @param CreateRestrictedDataTokenRequest $rdtRequest
     * @return callable
     */
    public function makeRdtProviderFromRequest(
        CreateRestrictedDataTokenRequest $rdtRequest
    );
}
