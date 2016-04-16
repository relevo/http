<?php
declare(strict_types = 1);

namespace Relevo\Http;

interface HttpMiddleware
{
    public function registerHttpMiddleware(HttpRouter $router);
}
