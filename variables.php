<?php
//Single line commnet
#Single line comment
/*
Multi Line comments

*/

// echo 'hello world';
// print 'Hello world';

// VARIABLES

/*
-Prefix $
-Start with a letter or underscore
-Only letter,number and underscores
-Case sensetive
*/

// DATA TYPES

/*
-String
-Intergers
-Floats
-Booleans
-Arrays
-Objects
-NULL
-Resource
*/

$output = 'Felipe';

$num1 = 1;
$num2 = 10;
$num = $num1 + $num2;

$string1 = 'Hello0000';
$string2 = "World";
$greeting = $string1 . ' ' . $string2;
$greeting2 = "$string1 $string2";

$string3 = 'They\'re Here';

$float = 4.4;
$boolean = true;

define("GREETING", 'Hello everyone');

echo GREETING;
