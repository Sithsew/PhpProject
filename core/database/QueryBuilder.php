<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/12/2017
 * Time: 5:15 PM
 */

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS );

    }

    public function insert($table, $parameters)
    {

//        die(var_dump(array_keys($parameters)));

//        $sql = sprintf(
//            'insert into %s (%s) values (%s)',
//            $table,
//            implode(', ' , array_keys($parameters)),
//            'stub'
//        );


;
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(',', array_keys($parameters)),
            ':' . implode(', :' , array_keys($parameters))
        );

//        die(var_dump($sql));

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

            die('Whoops, something went wrong!');
        }



//        $statement->execute(['name'=>'joe', 'email' => 'joe@example.com'])
    }


}