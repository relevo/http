<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware;

class MiddlewarePipeline
{
    /**
     * @var string[]
     */
    private $middleware;

    /**
     * Create new MiddlewarePipeline.
     *
     * @param string[] $middleware
     */
    public function __construct(array $middleware = [])
    {
        $this->middleware = $middleware;
    }

    /**
     * Add middleware.
     *
     * @param string $middleware
     */
    public function add(string $middleware)
    {
        $this->middleware[] = $middleware;
    }

    /**
     * Get all middleware as an array.
     *
     * @return string[]
     */
    public function toArray() : array
    {
        return $this->middleware;
    }
}
