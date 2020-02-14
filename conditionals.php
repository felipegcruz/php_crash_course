<?php

#CONDITIONALS
// $num = 6;

// // if ($num < 1) {
// //     echo '5 passed';
// // } elseif ($num == 6) {
// //     echo 'Thats the number 6';
// // } else {
// //     echo 'did not passed';
// // }

// if ($num > 4 || $num < 10) {
//     echo "$num passed";
// }

#SWITCH
$favColor = 'blue';

switch ($favColor) {
    case 'red':
        echo 'Your favorite color is red.';
        break;
    case 'blue':
        echo 'Your favorite color is blue.';
        break;
    case 'green':
        echo 'Your favorite color is green.';
        break;
    default:
        echo 'Your favorite color is something else.';
}
