<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface RoutesHttpRequests
{
    /**
     * Route http requests to middleware.
     *
     * @param HttpRequestRouter $router
     */
    public function routeHttpRequests(HttpRequestRouter $router);
}
