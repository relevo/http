<?php
declare(strict_types = 1);

namespace Relevo\Http\Routing;

interface RequestRouter
{
    /**
     * Route http request to middleware.
     *
     * @param array $methods
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function route(array $methods, string $path, array $middleware, string $name = null);

    /**
     * Route GET request to middleware.
     *
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function get(string $path, array $middleware, string $name = null);

    /**
     * Route POST request to middleware.
     *
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function post(string $path, array $middleware, string $name = null);

    /**
     * Route PUT request to middleware.
     *
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function put(string $path, array $middleware, string $name = null);

    /**
     * Route DELETE request to middleware.
     *
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function delete(string $path, array $middleware, string $name = null);
}
