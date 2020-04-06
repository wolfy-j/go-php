<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

declare(strict_types=1);

namespace App\Controller;

use App\Job\Ping;
use Spiral\Views\ViewsInterface;
use Spiral\Jobs\QueueInterface;

class HomeController
{
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
        return $this->views->render('home.dark.php');
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
