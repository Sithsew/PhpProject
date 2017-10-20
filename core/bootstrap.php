<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/13/2017
 * Time: 9:18 AM
 */


use App\Core\App;

//$app =[];
//
//$app['config'] = require 'config.php';

App::bind('config', require 'config.php');


//die(var_dump(App::get('config')));

//require 'core/Router.php';
//require 'core/Request.php';
//require 'core/database/Connection.php';
//require 'core/database/QueryBuilder.php';


//$app['database'] = new QueryBuilder(
//
//    Connection::make($app['config']['database'])
//
//);

App::bind('database', new QueryBuilder(

    Connection::make($config = App::get('config')['database'])

));

function view($name, $data=[])
{

    extract($data);

//    return require  "views/{$name}.php";
    return require  "app/views/{$name}.view.php";


}


function redirect($path){

    header("Location:/{$path}");

}