<?php

namespace Glue\SPAPI\OpenAPI\Services\RDT;

use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\ApiException;
use Glue\SPAPI\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SPAPI\OpenAPI\Exceptions\RestrictedDataTokenRequestException;
use Glue\SPAPI\OpenAPI\Services\Factory\ClientFactoryContract;

class RestrictedDataTokenProvider implements RestrictedDataTokenProviderContract
{
    /**
     * @var ClientFactoryContract
     */
    protected $clientFactory;

    public function __construct(
        ClientFactoryContract $clientFactory
    ) {
        $this->clientFactory = $clientFactory;
    }

    /**
     * Make a provider callback for retrieving a Restricted Data Token (RDT)
     * based on the RDT request argument.
     *
     * @param CreateRestrictedDataTokenRequest $rdtRequest
     * @return callable
     */
    public function fromRdtRequest(CreateRestrictedDataTokenRequest $rdtRequest)
    {
        return function () use ($rdtRequest) {
            try {
                $tokensApi   = $this->clientFactory->createTokensV20210301ApiClient();
                $rdtResponse = $tokensApi->createRestrictedDataToken($rdtRequest);
                return $rdtResponse->getRestrictedDataToken();
            } catch (ApiException $ex) {
                $msg = "Failed to retrieve Restricted Data Token: '{$ex->getMessage()}'";
                throw new RestrictedDataTokenRequestException($msg, 0, $ex);
            }
        };
    }
}
