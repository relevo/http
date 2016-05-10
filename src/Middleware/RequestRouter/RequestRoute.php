<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware\RequestRouter;

interface RequestRoute
{
    /**
     * Get HTTP request methods.
     *
     * @return string[]
     */
    public function getMethods() : array;

    /**
     * Get request path.
     *
     * @return string
     */
    public function getPath() : string;

    /**
     * Get middleware.
     *
     * @return string[]
     */
    public function getMiddleware() : array;

    /**
     * Get route name.
     *
     * @return string
     */
    public function getName() : string;
}
