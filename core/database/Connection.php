<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/12/2017
 * Time: 5:10 PM
 */
class Connection
{
    public static function  make($config)
    {
        try{
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }catch (PDOException $e){
            die($e->getMessage());
        }
    }
}



