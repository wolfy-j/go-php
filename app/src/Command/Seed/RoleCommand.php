<?php
/**
 * {project-name}
 * 
 * @author {author-name}
 */
declare(strict_types=1);

namespace App\Command\Seed;

use App\Database\Roles;
use Cycle\ORM\TransactionInterface;
use Spiral\Console\Command;

class RoleCommand extends Command
{
    protected const NAME = 'seed:role';

    protected const DESCRIPTION = '';

    protected const ARGUMENTS = [];

    protected const OPTIONS = [];

    /**
     * Perform command
     * @param TransactionInterface $tr
     * @throws \Throwable
     */
    protected function perform(TransactionInterface $tr): void
    {
        $roles = ['Grand Father', 'Grand Mother', 'Father', 'Mother', 'Son', 'Daughter', 'Uncle', 'Aunt'];
        foreach($roles as $name)
        {
            $role = new Roles();
            $role->name = $name;
            $tr->persist($role);
        }
        $tr->run();
    }
}
