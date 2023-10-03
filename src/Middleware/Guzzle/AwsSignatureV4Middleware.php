<?php

namespace Glue\SpApi\OpenAPI\Middleware\Guzzle;

use Aws\Signature\SignatureV4;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
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

    /**
     * @return static
     */
    public static function fromSpApiConfig(
        SpApiConfig $spApiConfig,
        callable $awsCredentialProvider,
        $awsCredentialScopeServiceOverride = null,
        $awsCredentialScopeRegionOverride = null
    ) {
        $service = $awsCredentialScopeServiceOverride
            ?: $spApiConfig->defaultAwsCredentialScopeService;
        $region  = $awsCredentialScopeRegionOverride
            ?: $spApiConfig->defaultAwsCredentialScopeRegion;

        return new static(
            $awsCredentialProvider,
            new SignatureV4($service, $region)
        );
    }
}
