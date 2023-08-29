<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;

interface ClientAuthenticatorInterface
{
    /**
     * Create an authenticated Guzzle client, ready to be passed into
     * the constructor of an SP-API client class.
     *
     * @param HandlerStack $handlerStack
     * @param callable|null $rdtProvider Callable restricted data token provider that returns an RDT, if needed for the SP-API operation.
     * @param string|null $awsCredentialScopeServiceOverride
     * @param string|null $awsCredentialScopeRegionOverride
     * @return ClientInterface
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createAuthenticatedGuzzleClient(
        HandlerStack $handlerStack,
        callable $rdtProvider = null,
        $awsCredentialScopeServiceOverride = null,
        $awsCredentialScopeRegionOverride = null
    );
}
