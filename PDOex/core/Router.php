<?php

namespace App\Core;

class Router
{

    public $routes = [

        'GET' => [],

        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;
        return $router;

    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;

    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {



            return $this->callAction(

                ...explode('@', $this->routes[$requestType][$uri])   #<SPLAT OPERATOR ...> if an array passed to a
            );                                                               #function with the splat operator each item
                                                                            #within the array will be converted into function arguments
        }

        throw new Exception('No route defined for this URI!');


    }


    protected function callAction($controller, $action)
    {

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception(
                "{$controller} does not repsond to the {$action} action!"

            );
        }
        return $controller->$action();
    }
}