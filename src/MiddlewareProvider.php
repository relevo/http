<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface MiddlewareProvider
{
    /**
     * Register middleware into the given pipeline.
     *
     * @param MiddlewarePipeline $pipeline
     */
    public function registerMiddleware(MiddlewarePipeline $pipeline);
}
