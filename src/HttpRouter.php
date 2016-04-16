<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface HttpRouter
{
    public function get(string $path, array $middleware, string $name = null);

    public function post(string $path, array $middleware, string $name = null);
}
