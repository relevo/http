<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware;

interface AddsMiddleware
{
    /**
     * Add middleware to pipeline.
     *
     * @param MiddlewarePipeline $pipeline
     */
    public function addMiddleware(MiddlewarePipeline $pipeline);
}
