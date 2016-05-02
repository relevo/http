<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface MiddlewareProvider
{
    /**
     * Register middleware into the given router.
     *
     * @param RequestRouter $router
     */
    public function registerMiddleware(RequestRouter $router);
}
