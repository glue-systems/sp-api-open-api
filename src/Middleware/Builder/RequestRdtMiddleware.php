<?php

namespace Glue\SpApi\OpenAPI\Middleware\Builder;

use Glue\SpApi\OpenAPI\Builder\ClientBuilder;
use Glue\SpApi\OpenAPI\Clients\TokensV20210301\Model\CreateRestrictedDataTokenRequest;
use Glue\SpApi\OpenAPI\Services\Rdt\RdtServiceInterface;

class RequestRdtMiddleware
{
    const MIDDLEWARE_NAME = 'request_rdt';

    /**
     * @var RdtServiceInterface $rdtService
     */
    protected $rdtService;

    /**
     * @var CreateRestrictedDataTokenRequest
     */
    protected $rdtRequest;

    public function __construct(
        RdtServiceInterface $rdtService,
        CreateRestrictedDataTokenRequest $rdtRequest
    ) {
        $this->rdtService = $rdtService;
        $this->rdtRequest = $rdtRequest;
    }

    /**
     * @param callable $next
     * @return callable
     */
    public function __invoke(callable $next)
    {
        return function (ClientBuilder $builder) use ($next) {
            $rdtProvider = $this->rdtService->makeRdtProviderFromRequest($this->rdtRequest);

            $builder->withRdtProvider($rdtProvider);

            return $next($builder);
        };
    }
}
