<?php


namespace App\Controller;


use Spiral\Jobs\QueueInterface;
use Spiral\Prototype\Traits\PrototypeTrait;
use Spiral\Views\ViewsInterface;

class LandingController
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

    public function index(): string
    {
        return $this->views->render('home.dark.php');
    }

}