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
     * @var SpApiConfig
     */
    public $spApiConfig;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->lwaService  = \Mockery::mock(LwaServiceInterface::class);
        $this->spApiConfig = $this->buildSpApiConfig();
    }

    public function test_createAuthenticatedGuzzleClient_with_no_RDT()
    {
        $expectedToken      = 'fake-lwa-token123';
        $credentialProvider = function () {
            return \Mockery::mock(CredentialsInterface::class);
        };

        $this->lwaService->shouldReceive('rememberLwaAccessToken')
            ->once()
            ->withNoArgs()
            ->andReturn($expectedToken);

        $sut = new ClientAuthenticator(
            $this->lwaService,
            $credentialProvider,
            $this->spApiConfig
        );

        $guzzleClient = $sut->createAuthenticatedGuzzleClient();
        $guzzleConfig = $guzzleClient->getConfig();

        $this->assertFalse(empty($guzzleConfig['headers']['x-amz-access-token']));
        $this->assertEquals($expectedToken, $guzzleClient->getConfig()['headers']['x-amz-access-token']);
        $this->assertEquals($this->spApiConfig->spApiBaseUrl, $guzzleClient->getConfig()['base_uri']);
    }

    public function test_createAuthenticatedGuzzleClient_with_RDT()
    {
        $expectedRdt        = 'fake-rdt123';
        $credentialProvider = function () {
            return \Mockery::mock(CredentialsInterface::class);
        };

        $sut = new ClientAuthenticator(
            $this->lwaService,
            $credentialProvider,
            $this->spApiConfig
        );

        $guzzleClient = $sut->createAuthenticatedGuzzleClient($expectedRdt);
        $guzzleConfig = $guzzleClient->getConfig();

        $this->assertFalse(empty($guzzleConfig['headers']['x-amz-access-token']));
        $this->assertEquals($expectedRdt, $guzzleClient->getConfig()['headers']['x-amz-access-token']);
        $this->assertEquals($this->spApiConfig->spApiBaseUrl, $guzzleClient->getConfig()['base_uri']);
    }
}
