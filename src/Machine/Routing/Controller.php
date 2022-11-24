<?php


namespace Machine\Routing;


use Machine\Middlewares\BaseMiddleware;

abstract class Controller
{
    public string $option = ''; 
    /**
     * @var BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function middleware(BaseMiddleware $middleware){
        $this->middlewares[] = $middleware;
    }

    public function getMiddleware()
    {
        return $this->middlewares;
    }

}