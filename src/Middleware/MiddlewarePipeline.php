<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware;

interface MiddlewarePipeline
{
    /**
     * Add middleware.
     *
     * @param callable|string $middleware
     */
    public function add($middleware);
}
