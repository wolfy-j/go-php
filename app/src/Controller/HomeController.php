<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace App\Controller;

use App\Database\User;
use App\Job\Ping;
use Cycle\ORM\Transaction;
use Spiral\Auth\AuthContextInterface;
use Spiral\Http\Exception\ClientException\ForbiddenException;
use Spiral\Prototype\Traits\PrototypeTrait;
use Spiral\Views\ViewsInterface;
use Spiral\Jobs\QueueInterface;

class HomeController
{
    use PrototypeTrait;

    /** @var ViewsInterface */
    private $views;
    /** @var QueueInterface */
    private $queue;
    /**
     * @param ViewsInterface $views
     * @param QueueInterface $queue
     */
    public function __construct(ViewsInterface $views, QueueInterface $queue)
    {
        $this->queue = $queue;
        $this->views = $views;
    }
    /**
     * @return string
     */
    public function index(): string
    {

        if ($this->auth->getActor() === null) {
            throw new ForbiddenException('Invalid Login Attempt or user not found');
        }

        dump($this->auth->getActor());
    }
    /**
     * Example of exception page.
     */
    public function exception(): void
    {
        echo $undefined;
    }
    /**
     * @return string
     */
    public function ping(): string
    {
        $jobID = $this->queue->push(
            Ping::class,
            ['value' => 'hello world']
        );

        return sprintf('Job ID: %s', $jobID);
    }
}
