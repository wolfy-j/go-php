<?php
/**
 * {project-name}
 * 
 * @author {author-name}
 */
declare(strict_types=1);

namespace App\Command\Seed;

use App\Database\Account;
use Cycle\ORM\TransactionInterface;
use Faker\Generator;
use Spiral\Console\Command;

class AccountCommand extends Command
{
    protected const NAME = 'seed:account';

    protected const DESCRIPTION = '';

    protected const ARGUMENTS = [];

    protected const OPTIONS = [];

    /**
     * Perform command
     * @param TransactionInterface $tr
     * @param Generator $faker
     * @throws \Throwable
     */
    protected function perform(TransactionInterface $tr, Generator $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $user = new Account();
            $user->name = $faker->name;
            $tr->persist($user);
        }

        $tr->run();
    }
}
