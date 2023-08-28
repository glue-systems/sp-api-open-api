<?php

namespace Glue\SpApi\OpenAPI\Middleware\Guzzle;

use Aws\Signature\SignatureV4;
use Psr\Http\Message\RequestInterface;

class AwsSignatureV4Middleware
{
    /**
     * @var callable
     */
    protected $credentialProvider;

    /**
     * @var string
     */
    protected $service;

    /**
     * @var string
     */
    protected $region;

    /**
     * @param callable $credentialProvider
     * @param string $service
     * @param string $region
     */
    public function __construct(callable $credentialProvider, $service, $region)
    {
        $this->credentialProvider = $credentialProvider;
        $this->service            = $service;
        $this->region             = $region;
    }

    public function __invoke(callable $next)
    {
        return function (RequestInterface $request, array $options = []) use ($next) {
            // Example from official docs: https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/service_cloudsearch-custom-requests.html
            $credentials = call_user_func($this->credentialProvider)->wait();

            $signer  = new SignatureV4($this->service, $this->region);
            $request = $signer->signRequest($request, $credentials);

            return $next($request, $options);
        };
    }
}
