<?php

namespace Tests\Services;

use Aws\Credentials\CredentialsInterface;
use Glue\SpApi\OpenAPI\Services\Authenticator\ClientAuthenticator;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceContract;
use Glue\SpApi\OpenAPI\Services\SpApiConfig;
use Mockery\MockInterface;
use Psr\SimpleCache\CacheInterface;
use Tests\TestCase;

class ClientAuthenticatorTest extends TestCase
{
    /**
     * @var CacheInterface|MockInterface
     */
    public $cache;

    /**
     * @var LwaServiceContract|MockInterface
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
        $this->cache       = \Mockery::mock(CacheInterface::class);
        $this->lwaService  = \Mockery::mock(LwaServiceContract::class);
        $this->spApiConfig = $this->buildSpApiConfig();
    }

    public function test_createAuthenticatedGuzzleClient_with_cached_LWA_token()
    {
        $cachedLwaToken     = 'fake-lwa-token123';
        $credentialProvider = function () {
            return \Mockery::mock(CredentialsInterface::class);
        };

        $this->cache->shouldReceive('get')
            ->once()
            ->with(ClientAuthenticator::LWA_ACCESS_TOKEN_CACHE_KEY)
            ->andReturn($cachedLwaToken);

        $sut = new ClientAuthenticator(
            $this->cache,
            $this->lwaService,
            $credentialProvider,
            $this->spApiConfig
        );

        $guzzleClient = $sut->createAuthenticatedGuzzleClient();
        $guzzleConfig = $guzzleClient->getConfig();

        $this->assertFalse(empty($guzzleConfig['headers']['x-amz-access-token']));
        $this->assertEquals($cachedLwaToken, $guzzleClient->getConfig()['headers']['x-amz-access-token']);
        $this->assertEquals($this->spApiConfig->spApiBaseUrl, $guzzleClient->getConfig()['base_uri']);
    }
}
