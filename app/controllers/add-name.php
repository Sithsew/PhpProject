<?php


//var_dump('You typed ' . $_POST['name']);
//
//var_dump($app['database']);

App::get('database')->insert('users', [
    'name' => $_POST['name']
]);


header('Location: /');

//after creatin composer.js file  run the composer install