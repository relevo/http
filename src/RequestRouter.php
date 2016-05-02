<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface RequestRouter
{
    public function get(string $path, array $middleware, string $name = null);

    public function post(string $path, array $middleware, string $name = null);

    public function put(string $path, array $middleware, string $name = null);

    public function delete(string $path, array $middleware, string $name = null);
}
