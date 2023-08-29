<?php

namespace Glue\SpApi\OpenAPI\Utilities;

class BuilderMiddlewarePipeline
{
    /**
     * @var array
     */
    protected $builderMiddlewareList = [];

    /**
     * @return static
     */
    public function push(callable $middleware, $name = '')
    {
        $this->builderMiddlewareList[] = [$middleware, $name];
        return $this;
    }

    /**
     * Send the ClientBuilder instance through the pipeline and return the
     * builder with the resulting enhancements.
     *
     * @param ClientBuilder $builder
     * @return ClientBuilder
     */
    public function send(ClientBuilder $builder)
    {
        if (empty($this->builderMiddlewareList)) {
            return $builder;
        }

        // This may seem counterintuitive, but iterating in reverse allows us to set
        // up the `next` callbacks such that they are linked and then invoked in the
        // expected "first in first out" order of the original builderMiddlewareList array.
        $previous = null;
        foreach (array_reverse($this->builderMiddlewareList) as $i => $item) {
            list($middleware, $name) = $item;
            if ($i === 0) {
                $previous = $middleware(
                    $this->_makeFinalCallbackReturningBuilder($builder)
                );
                continue;
            }
            $previous = $middleware($previous);
        }

        // Now we invoke the returned callback of the 1st middleware element in
        // builderMiddlewareList to begin the pipeline and resolve the final
        // ClientBuilder instance.
        $finalBuilder = $previous($builder);
        return $finalBuilder;
    }

    protected function _makeFinalCallbackReturningBuilder(ClientBuilder $builder)
    {
        return function () use ($builder) {
            return $builder;
        };
    }
}
