<?php
declare(strict_types = 1);

namespace Relevo\Http\Routing;

interface RequestRouter
{
    /**
     * Add route.
     *
     * @param array $methods
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function addRoute(array $methods, string $path, array $middleware, string $name = null);

    /**
     * Add GET route.
     *
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function get(string $path, array $middleware, string $name = null);

    /**
     * Add POST route.
     *
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function post(string $path, array $middleware, string $name = null);

    /**
     * Add PUT route.
     *
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function put(string $path, array $middleware, string $name = null);

    /**
     * Add DELETE route.
     *
     * @param string $path
     * @param array $middleware
     * @param string $name
     */
    public function delete(string $path, array $middleware, string $name = null);
}
