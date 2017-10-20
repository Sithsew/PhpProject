<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/17/2017
 * Time: 2:46 PM
 */

return [
    'database' =>[
        'name' => 'blog',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]
];

