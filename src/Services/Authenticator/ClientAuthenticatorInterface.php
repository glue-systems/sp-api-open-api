<?php

namespace Glue\SpApi\OpenAPI\Services\Authenticator;

use Glue\SpApi\OpenAPI\Exceptions\LwaAccessTokenException;
use Glue\SpApi\OpenAPI\Exceptions\RestrictedDataTokenException;
use GuzzleHttp\ClientInterface;

interface ClientAuthenticatorInterface
{
    /**
     * Create an authenticated Guzzle client, ready to be passed into
     * the constructor of an SP-API client class.
     *
     * @param callable|null $rdtProvider Callable restricted data token provider that returns an RDT, if needed for the SP-API operation.
     * @return ClientInterface
     * @throws LwaAccessTokenException|RestrictedDataTokenException
     */
    public function createAuthenticatedGuzzleClient(
        callable $rdtProvider = null
    );
}
