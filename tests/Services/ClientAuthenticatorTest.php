<?php

namespace Tests\Services;

use Aws\Credentials\CredentialsInterface;
use Aws\Signature\SignatureV4;
use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Middleware\Guzzle\AwsSignatureV4Middleware;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticator;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use GuzzleHttp\HandlerStack;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientAuthenticatorTest extends TestCase
{
    /**
     * @var LwaServiceInterface|MockInterface
     */
    public $lwaService;

    /**
     * @var HandlerStack|MockInterface
     */
    public $handlerStack;

    /**
     * @var callable
     */
    public $awsCredentialProvider;

    /**
     * @var SpApiConfig
     */
    public $spApiConfig;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->lwaService            = \Mockery::mock(LwaServiceInterface::class);
        $this->handlerStack          = \Mockery::mock(HandlerStack::class);
        $this->awsCredentialProvider = function () {
            return \Mockery::mock(CredentialsInterface::class);
        };
        $this->spApiConfig           = $this->buildSpApiConfig();
    }

    public function test_createAuthenticatedGuzzleClient_with_no_rdtProvider_uses_lwa_as_access_token()
    {
        $lwaToken = 'fake-lwa-token123';
        $this->lwaService->shouldReceive('rememberLwaAccessToken')
            ->once()
            ->withNoArgs()
            ->andReturn($lwaToken);
        $this->_arrangeHappyCaseForHandlerStack(
            $this->spApiConfig->defaultAwsCredentialScopeService,
            $this->spApiConfig->defaultAwsCredentialScopeRegion
        );

        $sut = new ClientAuthenticator(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig
        );

        $guzzleClient = $sut->createAuthenticatedGuzzleClient($this->handlerStack);
        $guzzleConfig = $guzzleClient->getConfig();

        $this->assertFalse(empty($guzzleConfig['headers']['x-amz-access-token']));
        $this->assertEquals($lwaToken, $guzzleClient->getConfig()['headers']['x-amz-access-token']);
    }

    public function test_createAuthenticatedGuzzleClient_with_rdtProvider_uses_rdt_as_access_token()
    {
        $restrictedDataToken = 'fake-rdt';
        $expectedRdtProvider = function () use ($restrictedDataToken) {
            return $restrictedDataToken;
        };
        $this->_arrangeHappyCaseForHandlerStack(
            $this->spApiConfig->defaultAwsCredentialScopeService,
            $this->spApiConfig->defaultAwsCredentialScopeRegion
        );

        $sut = new ClientAuthenticator(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig
        );

        $guzzleClient = $sut->createAuthenticatedGuzzleClient(
            $this->handlerStack,
            $expectedRdtProvider
        );
        $guzzleConfig = $guzzleClient->getConfig();

        $this->assertFalse(empty($guzzleConfig['headers']['x-amz-access-token']));
        $this->assertEquals($restrictedDataToken, $guzzleClient->getConfig()['headers']['x-amz-access-token']);
    }

    public function test_createAuthenticatedGuzzleClient_can_use_aws_credential_scope_overrides()
    {
        $awsCredentialScopeServiceOverride = 'fake-service';
        $awsCredentialScopeRegionOverride  = 'fake-region';
        $restrictedDataToken               = 'fake-rdt';
        $expectedRdtProvider               = function () use ($restrictedDataToken) {
            return $restrictedDataToken;
        };
        $this->_arrangeHappyCaseForHandlerStack(
            $awsCredentialScopeServiceOverride,
            $awsCredentialScopeRegionOverride
        );

        $sut = new ClientAuthenticator(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig
        );

        $guzzleClient = $sut->createAuthenticatedGuzzleClient(
            $this->handlerStack,
            $expectedRdtProvider,
            $awsCredentialScopeServiceOverride,
            $awsCredentialScopeRegionOverride
        );
        $guzzleConfig = $guzzleClient->getConfig();

        $this->assertFalse(empty($guzzleConfig['headers']['x-amz-access-token']));
        $this->assertEquals($restrictedDataToken, $guzzleClient->getConfig()['headers']['x-amz-access-token']);
    }

    protected function _arrangeHappyCaseForHandlerStack(
        $expectedService,
        $expectedRegion
    ) {
        $expectedAwsSignatureV4Middleware = new AwsSignatureV4Middleware(
            $this->awsCredentialProvider,
            new SignatureV4($expectedService, $expectedRegion)
        );

        $this->handlerStack->shouldReceive('push')
            ->once()
            ->withArgs(function (...$args) use ($expectedAwsSignatureV4Middleware) {
                return $args[0] == $expectedAwsSignatureV4Middleware
                    && $args[1] === AwsSignatureV4Middleware::MIDDLEWARE_NAME;
            });
    }
}
