<?php

namespace Glue\SpApi\OpenAPI\Middleware\Guzzle;

use Aws\Signature\SignatureV4;
use Psr\Http\Message\RequestInterface;

class AwsSignatureV4Middleware
{
    const MIDDLEWARE_NAME = 'aws_signature_v4';

    /**
     * @var callable
     */
    protected $credentialProvider;

    /**
     * @var SignatureV4
     */
    protected $signer;

    /**
     * @param callable $credentialProvider
     */
    public function __construct(
        callable $credentialProvider,
        SignatureV4 $signer
    ) {
        $this->credentialProvider = $credentialProvider;
        $this->signer             = $signer;
    }

    public function __invoke(callable $next)
    {
        return function (RequestInterface $request, array $options = []) use ($next) {
            // Example from official docs: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/service_cloudsearch-custom-requests.html
            $credentials = call_user_func($this->credentialProvider)->wait();

            $request = $this->signer->signRequest($request, $credentials);

            return $next($request, $options);
        };
    }
}
