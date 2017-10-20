<?php
/**
 * Created by PhpStorm.
 * User: sithara_s
 * Date: 10/11/2017
 * Time: 6:21 PM
 */

$query = require 'bootstrap.php';

require 'functions.php';
require 'Task.php';

$a='sihtara';
$b='sewwanthi';

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'Developer'
];

$person['name']='Tharindu';

$names = [
    'me' => 'sithara',
    'cousin' => 'thilina',
    'brother' => 'isahn'
];
//echo("$a,$b");

//echo($a ."," .$b);

//foreach ($names as $name) {
//    echo  $name.',';
//}

// $tasks = [
//     'title' => 'finish homework',
//     'due' => 'today',
//     'assigned_to' => 'jefry',
//     'completed' => true
// ];

//dd($tasks);


$tasks=$query->selectAll('todos');




require 'welcome.php';

?>

<form>

</form>
