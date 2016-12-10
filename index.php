<?php

//Initializing new array
$person = [
    'age' => 25,
    'hair' => 'brown',
    'career' => 'web developer'
];

//Pushing new item with an index 'name' to the array
$person['name'] = 'Nik'; //We would use $person[] = 'Nik' for a regular array

//Removing age item from the array
unset($person['age']);

/*
 * die(var_dump($person));
 */

require 'index.view.php';