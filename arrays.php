<?php
#Array - Variable that holds multiple values

/*
-Indexed
-Assosiative
-Multi-dimensional
*/

//Indexed
$people = array('Kevin', 'Thaissa', 'Taya');
$ids = array(23, 1, 33);
$cars = ['Toyta', 'VW', 'General Motros'];
$cars[3] = 'Chevy';
$cars[] = 'BMW';

// echo count($cars);
// print_r($cars);
// var_dump($cars);

// echo $people[0];
// echo $ids[2];
// echo $cars[4];

//Assosiative Arrays
$people = array('Brad' => 35, 'Jose' => 22, 'William' => 39);
$ids = [22 => 'Felipe', 02 => 'Thaissa'];

// echo $ids[22];
// echo $people['Brad'];
// $people['Jill'] = 42;
// print_r($people);

//Multi-dimensional
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
);

echo $cars[1][2];
