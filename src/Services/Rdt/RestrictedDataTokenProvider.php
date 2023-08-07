<?php

namespace Glue\SpApi\OpenAPI\Services\Rdt;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\ApiException;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenRequestException;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryContract;

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
                $msg = "Failed to retrieve Restricted Data Token (RDT): '{$ex->getMessage()}'";
                throw new RestrictedDataTokenRequestException($msg, 0, $ex);
            }
        };
    }
}
