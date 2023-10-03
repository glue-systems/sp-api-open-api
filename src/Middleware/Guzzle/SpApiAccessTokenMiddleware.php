<?php

namespace Glue\SpApi\OpenAPI\Middleware\Guzzle;

use Glue\SpApi\OpenAPI\Services\Lwa\LwaServiceInterface;
use Psr\Http\Message\RequestInterface;

class SpApiAccessTokenMiddleware
{
    const MIDDLEWARE_NAME = 'sp_api_access_token';

    /**
     * @var LwaServiceInterface
     */
    protected $lwaService;

    /**
     * @var callable
     */
    protected $rdtProvider;

    public function __construct(
        LwaServiceInterface $lwaService,
        callable $rdtProvider = null
    ) {
        $this->lwaService  = $lwaService;
        $this->rdtProvider = $rdtProvider;
    }

    public function __invoke(callable $next)
    {
        return function (RequestInterface $request, array $options = []) use ($next) {
            if ($this->rdtProvider) {
                $accessToken = call_user_func($this->rdtProvider);
            } else {
                $accessToken = $this->lwaService->rememberLwaAccessToken();
            }

            $request = $request->withHeader('x-amz-access-token', $accessToken);

            return $next($request, $options);
        };
    }
}
