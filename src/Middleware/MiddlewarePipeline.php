<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware;

interface MiddlewarePipeline
{
    /**
     * Add middleware.
     *
     * @param string $middleware
     */
    public function add($middleware);

    /**
     * Get all middleware as an array.
     *
     * @return string[]
     */
    public function toArray() : array;
}
