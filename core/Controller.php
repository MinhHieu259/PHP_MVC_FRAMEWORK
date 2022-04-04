<?php

namespace app\core ;

use app\core\middlewares\BaseMiddleware;

class Controller
{
    public string $layout = 'main';
    public string $action = '';
    /**
     * Undocumented variable
     *
     * @var array
     */
    protected array $middlewares = [];
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    public function render($view, $params = [])
    {
        return Application::$app->view->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }
    

    /**
     * Get undocumented variable
     *
     * @return  array
     */ 
    public function getMiddlewares()
    {
        return $this->middlewares;
    }

    /**
     * Set undocumented variable
     *
     * @param  array  $middlewares  Undocumented variable
     *
     * @return  self
     */ 
    public function setMiddlewares(array $middlewares)
    {
        $this->middlewares[] = $middlewares;
    }
}
