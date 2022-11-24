<?php


namespace Machine\Middlewares;


use Machine\App\Application;
use Machine\Session\Session;

class AuthMiddleware extends BaseMiddleware
{
    public array $actions = [];

    /**
     * AuthMiddleware constructor.
     * @param array $actions
     */
    public function __construct(array $actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (guest()){
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)){
                redirectTo('login');
            }
        }else{
            Session::$session->set('loginTimeSession', time());
        }

    }
}