<?php
declare(strict_types = 1);

namespace Relevo\Http\Routing;

interface RequestRouter
{
    /**
     * Route http request to middleware.
     */
    public function route(array $methods, string $path, array $middleware, string $name = null);

    /**
     * Route GET request to middleware.
     */
    public function get(string $path, array $middleware, string $name = null);

    /**
     * Route POST request to middleware.
     */
    public function post(string $path, array $middleware, string $name = null);

    /**
     * Route PUT request to middleware.
     */
    public function put(string $path, array $middleware, string $name = null);

    /**
     * Route DELETE request to middleware.
     */
    public function delete(string $path, array $middleware, string $name = null);
}
