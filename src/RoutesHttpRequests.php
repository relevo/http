<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface RoutesHttpRequests
{
    public function routeHttpRequests(HttpRequestRouter $router);
}
