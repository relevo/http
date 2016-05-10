<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware\RequestRouter;

class RequestRouteCollection
{
    /**
     * @var RequestRoute[]
     */
    private $routes;

    /**
     * Create new RequestRouteCollection.
     *
     * @param RequestRoute[] $routes
     */
    public function __construct(array $routes = [])
    {
        $this->routes = $routes;
    }

    /**
     * Add request route.
     *
     * @param string[] $methods
     * @param string $path
     * @param string[] $middleware
     * @param string $name
     */
    public function add(array $methods, string $path, array $middleware, string $name = null)
    {
        $this->routes[] = new RequestRoute($methods, $path, $middleware, $name);
    }

    /**
     * Add GET route.
     *
     * @param string $path
     * @param string[] $middleware
     * @param string $name
     */
    public function get(string $path, array $middleware, string $name = null)
    {
        $this->add(['GET'], $path, $middleware, $name);
    }

    /**
     * Add POST route.
     *
     * @param string $path
     * @param string[] $middleware
     * @param string $name
     */
    public function post(string $path, array $middleware, string $name = null)
    {
        $this->add(['POST'], $path, $middleware, $name);
    }

    /**
     * Add PUT route.
     *
     * @param string $path
     * @param string[] $middleware
     * @param string $name
     */
    public function put(string $path, array $middleware, string $name = null)
    {
        $this->add(['PUT'], $path, $middleware, $name);
    }

    /**
     * Add PATCH route.
     *
     * @param string $path
     * @param string[] $middleware
     * @param string $name
     */
    public function patch(string $path, array $middleware, string $name = null)
    {
        $this->add(['PATCH'], $path, $middleware, $name);
    }

    /**
     * Add DELETE route.
     *
     * @param string $path
     * @param string[] $middleware
     * @param string $name
     */
    public function delete(string $path, array $middleware, string $name = null)
    {
        $this->add(['DELETE'], $path, $middleware, $name);
    }

    /**
     * Get all routes as an array.
     *
     * @return RequestRoute[]
     */
    public function toArray() : array
    {
        return $this->routes;
    }
}
