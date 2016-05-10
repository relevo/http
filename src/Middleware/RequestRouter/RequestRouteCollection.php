<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware\RequestRouter;

use Relevo\Http\Middleware\MiddlewarePipeline;

interface RequestRouteCollection
{
    /**
     * Add request route.
     *
     * @param array $methods
     * @param string $path
     * @param MiddlewarePipeline|callable[]|string[] $middleware
     * @param string $name
     */
    public function add(array $methods, string $path, array $middleware, string $name = null);

    /**
     * Add GET route.
     *
     * @param string $path
     * @param MiddlewarePipeline|callable[]|string[] $middleware
     * @param string $name
     */
    public function get(string $path, array $middleware, string $name = null);

    /**
     * Add POST route.
     *
     * @param string $path
     * @param MiddlewarePipeline|callable[]|string[] $middleware
     * @param string $name
     */
    public function post(string $path, array $middleware, string $name = null);

    /**
     * Add PUT route.
     *
     * @param string $path
     * @param MiddlewarePipeline|callable[]|string[] $middleware
     * @param string $name
     */
    public function put(string $path, array $middleware, string $name = null);

    /**
     * Add PATCH route.
     *
     * @param string $path
     * @param MiddlewarePipeline|callable[]|string[] $middleware
     * @param string $name
     */
    public function patch(string $path, array $middleware, string $name = null);

    /**
     * Add DELETE route.
     *
     * @param string $path
     * @param MiddlewarePipeline|callable[]|string[] $middleware
     * @param string $name
     */
    public function delete(string $path, array $middleware, string $name = null);
}
