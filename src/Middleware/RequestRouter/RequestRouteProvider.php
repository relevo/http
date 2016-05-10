<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware\RequestRouter;

interface RequestRouteProvider
{
    /**
     * Add request routes to the given collection.
     *
     * @param RequestRouteCollection $routes
     */
    public function addRequestRoutes(RequestRouteCollection $routes);
}
