<?php
declare(strict_types = 1);

namespace Relevo\Http\Routing;

interface RequestRoutesProvider
{
    /**
     * Add request routes to router.
     *
     * @param RequestRouter $router
     */
    public function addRequestRoutes(RequestRouter $router);
}