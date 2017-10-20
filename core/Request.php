<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/17/2017
 * Time: 3:47 PM
 */

namespace App\Core;


class Request
{
    public static function uri()
    {
        return trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
//        return trim($_SERVER['REQUEST_URI'],'/');
    }


    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }


}