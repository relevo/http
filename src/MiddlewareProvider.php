<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface MiddlewareProvider
{
    /**
     * Add request routes to the given router.
     *
     * @param RequestRouter $router
     */
    public function addRequestRoutes(RequestRouter $router);
}
