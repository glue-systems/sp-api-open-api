<?php

namespace Tests\Services;

use Aws\Credentials\CredentialsInterface;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticator;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Glue\SpApi\OpenAPI\SpApiConfig;
use Mockery\MockInterface;
use Tests\TestCase;

class ClientAuthenticatorTest extends TestCase
{
    /**
     * @var LwaServiceInterface|MockInterface
     */
    public $lwaService;

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

        $sut = new ClientAuthenticator(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig
        );

        $guzzleClient = $sut->createAuthenticatedGuzzleClient();
        $guzzleConfig = $guzzleClient->getConfig();

        $this->assertFalse(empty($guzzleConfig['headers']['x-amz-access-token']));
        $this->assertEquals($lwaToken, $guzzleClient->getConfig()['headers']['x-amz-access-token']);
    }

    public function test_createAuthenticatedGuzzleClient_with_rdtProvider_uses_rdt_as_access_token()
    {
        $restrictedDataToken = 'fake-rdt123';
        $expectedRdtProvider = function () use ($restrictedDataToken) {
            return $restrictedDataToken;
        };

        $sut = new ClientAuthenticator(
            $this->lwaService,
            $this->awsCredentialProvider,
            $this->spApiConfig
        );

        $guzzleClient = $sut->createAuthenticatedGuzzleClient($expectedRdtProvider);
        $guzzleConfig = $guzzleClient->getConfig();

        $this->assertFalse(empty($guzzleConfig['headers']['x-amz-access-token']));
        $this->assertEquals($restrictedDataToken, $guzzleClient->getConfig()['headers']['x-amz-access-token']);
    }
}
