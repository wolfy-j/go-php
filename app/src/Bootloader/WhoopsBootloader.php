<?php

namespace App\Bootloader;

use App\Middleware\WhoopsMiddleware;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\Http\HttpBootloader;

class WhoopsBootloader extends Bootloader
{
    public function boot(HttpBootloader $http)
    {
        $http->addMiddleware(WhoopsMiddleware::class);
    }
}