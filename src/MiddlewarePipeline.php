<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface MiddlewarePipeline
{
    /**
     * Add middleware.
     *
     * @param callable $middleware
     */
    public function pipe(callable $middleware);
}
