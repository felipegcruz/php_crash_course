<?php

#LOOPS - Execute code set number of times

/*
    For
    While
    Do..While
    Foreach
*/

#For Loop
#@params - init,condition-inc
// for ($i = 0; $i <= 10; $i++) {
//     echo 'Number ' . $i;
//     echo '<br>';
// }

#While Loop
#@param - condition

// $i = 0;
// while ($i <= 10) {
//     echo 'Number ' . $i;
//     echo '<br>';
//     $i++;
// }

#Foreach Loop - For arrays 
// $people = ['Brad', 'Jose', 'William'];
// foreach ($people as $person) {
//     echo $person;
//     echo '<br>';
// }

$people = ['Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail.com', 'William' => 'william@yahoo.com'];
foreach ($people as $person => $email) {
    echo $person . ': ' . $email;
    echo '<br>';
}
