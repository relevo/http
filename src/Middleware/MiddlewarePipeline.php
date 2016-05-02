<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware;

interface MiddlewarePipeline
{
    /**
     * Add middleware.
     *
     * @param string|callable $middleware
     */
    public function pipe($middleware);
}
