<?php


namespace App\Bootloader;

use App\Repository\UserRepository;
use Spiral\Boot\Bootloader\Bootloader;
use Spiral\Bootloader\Auth\AuthBootloader;

class UserBootloader extends Bootloader
{
    public function boot(AuthBootloader $auth)
    {
        $auth->addActorProvider(UserRepository::class);
    }
}