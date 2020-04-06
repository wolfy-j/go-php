<?php


namespace App\Middleware;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class WhoopsMiddleware implements MiddlewareInterface
{
    private $responseFactory;

    public function __construct(ResponseFactoryInterface $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        try {
            return $handler->handle($request);
        } catch (\Throwable $e) {
            $response = $this->responseFactory->createResponse(500);
            $response->getBody()->write($this->renderWhoops($e));

            return $response;
        }
    }

    private function renderWhoops(\Throwable $e): string
    {
        $whoops = new \Whoops\Run();
        $whoops->allowQuit(false);
        $whoops->writeToOutput(false);

        $handler = new \Whoops\Handler\PrettyPageHandler();
        $handler->handleUnconditionally(true); // whoops does not know about RoadRunner

        $whoops->prependHandler($handler);

        return $whoops->handleException($e);
    }
}