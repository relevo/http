<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware;

interface PipesMiddleware
{
    /**
     * Add middleware to the pipeline.
     *
     * @param PipelineBuilder $pipeline
     */
    public function pipeMiddleware(PipelineBuilder $pipeline);
}
