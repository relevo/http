<?php
declare(strict_types = 1);

namespace Relevo\Http\Routing;

interface RequestRouter
{
    /**
     * Route http requests to middleware.
     */
    public function route(array $methods, string $path, array $middleware, string $name = null);

    /**
     * Route GET requests to middleware.
     */
    public function get(string $path, array $middleware, string $name = null);

    /**
     * Route POST requests to middleware.
     */
    public function post(string $path, array $middleware, string $name = null);

    /**
     * Route PUT requests to middleware.
     */
    public function put(string $path, array $middleware, string $name = null);

    /**
     * Route DELETE requests to middleware.
     */
    public function delete(string $path, array $middleware, string $name = null);
}
