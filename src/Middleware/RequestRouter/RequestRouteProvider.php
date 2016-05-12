<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware\RequestRouter;

interface RequestRouteProvider
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
