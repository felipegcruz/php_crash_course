<?php
// echo date('d'); //Day
// echo date('m'); //Month
// echo date('y'); //Year
// echo date('l'); //Day of the week
// echo date('y/m/d');
// echo date('m-d-y');

// echo date('h'); //Hour
// echo date('i'); //Min
// echo date('s'); //Seconds
// echo date('a'); //AM or PM

//Set time zone
// date_default_timezone_set('America/New_York');

// echo date('h:i:sa');

// $timestamp = mktime(10, 14, 54, 9, 10, 1981);

// echo $timestamp;

// echo date('m/d/y:sa', $timestamp);

$timestamp2 = strtotime('7:00pm March 22 2016');

echo $timestamp2;

echo date('m/d/Y', $timestamp2);
