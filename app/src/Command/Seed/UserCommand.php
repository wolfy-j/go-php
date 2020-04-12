<?php
/**
 * {project-name}
 * 
 * @author {author-name}
 */
declare(strict_types=1);

namespace App\Command\Seed;

use App\Database\User;
use Cycle\ORM\TransactionInterface;
use Faker\Generator;
use Spiral\Console\Command;

class UserCommand extends Command
{
    protected const NAME = 'seed:user';

    protected function perform(TransactionInterface $tr, Generator $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $user = new User();
            $user->name = $faker->name;
            $user->username = $faker->userName;
            $user->password = password_hash('password', PASSWORD_DEFAULT);
            $tr->persist($user);
        }

        $tr->run();
    }
}
