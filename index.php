<?php

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';

require 'core/bootstrap.php';

//$routes = [
//    '' => 'controllers/index.php',
//    'about/culture' => 'controllers/contacts.php'
//];

//$router = new Router;
//
//require 'routes.php';



//require $router->direct($uri);

//require Router::load('routes.php')
//    ->direct(Request::uri(), Request::method());

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());