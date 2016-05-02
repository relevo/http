<?php
declare(strict_types = 1);

namespace Relevo\Http\Routing;

interface RoutedMiddlewareProvider
{
    /**
     * Register middleware into the given router.
     *
     * @param RequestRouter $router
     */
    public function registerRoutedMiddleware(RequestRouter $router);
}
