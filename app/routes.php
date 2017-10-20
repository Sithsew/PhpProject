<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/17/2017
 * Time: 3:26 PM
 */



//$router->define([
//
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.php',
//    'about/culture' => 'controllers/about-culture.php',
//    'contact' => 'controllers/contact.php',
//    'names' => 'controllers/add-name.php'
//]);

//or
//$router->define('', 'controllers/contacts.php');

//Route::get('about', 'controllers/contacts.php');



//$router->get('', 'controllers/index.php');
//
//$router->get('about','controllers/about.php');
//$router->get('contacts','controllers/contacts.php');
//$router->get('about/culture','controllers/about-culture.php');
//$router->post('names', 'controllers/add-name.php');

//instead of above these are pages controller/s
$router->get('', 'PagesController@home');

$router->get('about','PagesController@about');
$router->get('contacts','PagesController@contacts');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

//var_dump($router->routes);