<?php

#FUNCTION - Block of code that can be repetedly called

/*
    Camel case - myFunction()
    Lower case - my_function()
    Pascal case - MyFunction()
 */

// Create simple function
// function simpleFunction()
// {
//     echo 'Hello World';
// }

// simpleFunction();

// Function with param
function sayHello($name = 'World')
{
    echo "Hello $name<br>";
}

// sayHello('Felipe');
// sayHello();

// function addNumbers($num1, $num2)
// {
//     echo $num1 + $num2;
// }

// addNumbers(1, 2);

// Return value
// function addNumbers($num1, $num2)
// {
//     return $num1 + $num2;
// }

// echo addNumbers(2, 2);

// By reference
$myNum = 10;

function addFive($num)
{
    $num += 5;
}

function addTen(&$num)
{
    $num += 10;
}

addFive($myNum);
echo "Value: $myNum<br>";

addTen($myNum);
echo "Value: $myNum<br>";
