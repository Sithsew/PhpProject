<?php

namespace App\Core;

class Router
{
    public $routes =[
        'GET' => [],
        'POST' => []
    ];


    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }


//    public function define($routes)
//    {
//        $this->routes = $routes;
//    }


    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }



    public  function direct($uri, $requestType)
    {


        if (array_key_exists($uri, $this->routes[$requestType])){


//            die(var_dump($uri,$requestType));

//            return $this->routes[$requestType][$uri];

            return $this->callAction(
                ...explode('@',  $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No routes Defined');

    }


    protected function callAction($controller, $action)
    {

//        die(var_dump($controller, $action));

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) {

            throw new Exception(
              "{$controller} does not respond to the {$action} action."
            );

        }

        return $controller-> $action ();
    }

}