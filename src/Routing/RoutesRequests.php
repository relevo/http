<?php
declare(strict_types = 1);

namespace Relevo\Http\Routing;

interface RoutesRequests
{
    /**
     * Route http requests to middleware.
     *
     * @param RequestRouter $router
     */
    public function routeRequests(RequestRouter $router);
}
