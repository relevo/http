<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware\RequestRouter;

interface MiddlewareProvider
{
    /**
     * Get HTTP request routes.
     *
     * @param RequestRouteCollection $routes
     *
     * @return RequestRouteCollection
     */
    public function getRequestRoutes(RequestRouteCollection $routes) : RequestRouteCollection;
}
