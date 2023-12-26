<?php

// Table of 2 using a for loop
echo "Table of 2:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "2 x $i = " . (2 * $i) . "\n";
}

// Checking the value of $number using if-elseif-else statements
$number = 5;

if ($number == 1) {
    echo "The number is 1";
} elseif ($number == 2) {
    echo "The number is 2";
} elseif ($number == 3) {
    echo "The number is 3";
} elseif ($number == 4) {
    echo "The number is 4";
} elseif ($number == 5) {
    echo "The number is 5";
} else {
    echo "The number is not 1, 2, 3, 4 or 5";
}

// Checking the value of $number using a switch statement
$number = 5;

switch ($number) {
    case 1:
        echo "The number is 1";
        break;
    case 2:
        echo "The number is 2";
        break;
    case 3:
        echo "The number is 3";
        break;
    case 4:
        echo "The number is 4";
        break;
    case 5:
        echo "The number is 5"; 
        break;
    default:
        echo "The number is not 1, 2, 3, 4 or 5";
}

?>
