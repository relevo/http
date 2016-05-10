<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware\RequestRouter;

class RequestRoute
{
    /**
     * @var string[]
     */
    private $methods;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string[]
     */
    private $middleware;

    /**
     * @var string
     */
    private $name;

    /**
     * Create new RequestRoute.
     *
     * @param string[] $methods
     * @param string $path
     * @param string[] $middleware
     * @param string $name
     */
    public function __construct(array $methods, string $path, array $middleware, string $name = null)
    {
        $this->methods = $methods;
        $this->path = $path;
        $this->middleware = $middleware;
        $this->name = $name;
    }

    /**
     * Get HTTP request methods.
     *
     * @return string[]
     */
    public function getMethods() : array
    {
        return $this->methods;
    }

    /**
     * Get request path.
     *
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }

    /**
     * Get middleware.
     *
     * @return string[]
     */
    public function getMiddleware() : array
    {
        return $this->middleware;
    }

    /**
     * Get route name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
}
