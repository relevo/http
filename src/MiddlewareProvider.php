<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface MiddlewareProvider
{
    /**
     * Add middleware to the given pipeline.
     *
     * @param MiddlewarePipeline $pipeline
     */
    public function addMiddleware(MiddlewarePipeline $pipeline);
}
