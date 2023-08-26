<?php

namespace Glue\SpApi\OpenAPI\Services\Rdt;

use Glue\SpApi\OpenAPI\Clients\TokensV20210301\ApiException;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use Glue\SpApi\OpenAPI\Services\Factory\ClientFactoryInterface;

class RdtService implements RdtServiceInterface
{
    /**
     * @var ClientFactoryInterface
     */
    protected $clientFactory;

    public function __construct(
        ClientFactoryInterface $clientFactory
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
    public function makeRdtProviderFromRequest(
        CreateRestrictedDataTokenRequest $rdtRequest
    ) {
        /**
         * Provider callback for retrieving a Restricted Data Token (RDT).
         *
         * @return string
         * @throws RestrictedDataTokenException
         */
        return function () use ($rdtRequest) {
            try {
                $tokensApi   = $this->clientFactory->createTokensV20210301ApiClient();
                $rdtResponse = $tokensApi->createRestrictedDataToken($rdtRequest);
                return $rdtResponse->getRestrictedDataToken();
            } catch (ApiException $ex) {
                $msg = "Failed to retrieve Restricted Data Token (RDT): '{$ex->getMessage()}'";
                throw new RestrictedDataTokenException($msg, 0, $ex);
            }
        };
    }
}
