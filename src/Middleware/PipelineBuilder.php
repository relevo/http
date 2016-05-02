<?php
declare(strict_types = 1);

namespace Relevo\Http\Middleware;

interface PipelineBuilder
{
    /**
     * Add middleware to the pipeline.
     *
     * @param string|callable $middleware
     */
    public function pipe($middleware);
}
