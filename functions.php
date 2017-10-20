<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/12/2017
 * Time: 1:05 PM
 */
//We dont need this
function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

//function connectToDb(){
//    try{
//        return new PDO('mysql:host=127.0.0.1;dbname=blog', 'root','');
//    }catch (PDOException $e){
//        die($e->getMessage());
//    }
//}

//function fetchAllTasks($pdo){
//    $statement = $pdo->prepare('select * from todos');
//
//    $statement->execute();
//
//    return $statement->fetchAll(PDO::FETCH_OBJ);
//
//}