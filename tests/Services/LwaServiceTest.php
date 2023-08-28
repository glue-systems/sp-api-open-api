<?php

namespace Tests\Services;

use Glue\SpApi\OpenAPI\Configuration\SpApiConfig;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaClientInterface;
use Glue\SpApi\OpenAPI\Services\Lwa\LwaService;
use GuzzleHttp\Client;
use Mockery\MockInterface;
use Psr\SimpleCache\CacheInterface;
use Tests\TestCase;

class LwaServiceTest extends TestCase
{
    /**
     * @var CacheInterface|MockInterface
     */
    public $cache;

    /**
     * @var LwaClientInterface|MockInterface
     */
    public $lwaClient;

    /**
     * @var SpApiConfig
     */
    public $spApiConfig;

    // TODO: This will need to be changed to `public function setUp(): void` after upgrading.
    public function setUp()
    {
        parent::setup();
        $this->cache       = \Mockery::mock(CacheInterface::class);
        $this->lwaClient   = \Mockery::mock(LwaClientInterface::class);
        $this->spApiConfig = $this->buildSpApiConfig();
    }

    public function test_rememberLwaAccessToken_can_get_cached_token()
    {
        $expectedToken = 'fake-lwa-token123';

        $this->cache->shouldReceive('get')
            ->once()
            ->with($this->spApiConfig->lwaAccessTokenCacheKey)
            ->andReturn($expectedToken);

        $sut = new LwaService(
            $this->lwaClient,
            $this->cache,
            $this->spApiConfig
        );

        $actualToken = $sut->rememberLwaAccessToken();

        $this->assertEquals($expectedToken, $actualToken);
    }

    public function test_rememberLwaAccessToken_can_request_new_token_and_put_in_cache()
    {
        $expectedToken = 'fake-lwa-token123';
        $expiresIn     = 3600;

        $this->cache->shouldReceive('get')
            ->once()
            ->with($this->spApiConfig->lwaAccessTokenCacheKey)
            ->andReturnNull();
        $this->lwaClient->shouldReceive('requestNewLwaAccessToken')
            ->once()
            ->withArgs(function ($arg1) {
                return $arg1 instanceof Client;
            })
            ->andReturn([
                'access_token' => $expectedToken,
                'expires_in'   => $expiresIn,
            ]);
        $this->cache->shouldReceive('set')
            ->once()
            ->with(
                $this->spApiConfig->lwaAccessTokenCacheKey,
                $expectedToken,
                $expiresIn - LwaService::CACHE_LIFE_BUFFER_IN_SECONDS
            )
            ->andReturn(true);

        $sut = new LwaService(
            $this->lwaClient,
            $this->cache,
            $this->spApiConfig
        );

        $actualToken = $sut->rememberLwaAccessToken();

        $this->assertEquals($expectedToken, $actualToken);
    }

    public function test_forgetCachedLwaAccessToken_can_forget_cached_token()
    {
        $this->cache->shouldReceive('delete')
            ->once()
            ->with($this->spApiConfig->lwaAccessTokenCacheKey)
            ->andReturnTrue();

        $sut = new LwaService(
            $this->lwaClient,
            $this->cache,
            $this->spApiConfig
        );

        $result = $sut->forgetCachedLwaAccessToken();

        $this->assertTrue($result);
    }
}
