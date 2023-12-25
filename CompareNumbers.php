<?php
$number1 = 10;
$number2 = 5;
$number3 = 8;
if ($number1 >= $number2 && $number1 >= $number3) {
    echo "The greatest number is: " . $number1;
} elseif ($number2 >= $number1 && $number2 >= $number3) {
    echo "The greatest number is: " . $number2;
} else {
    echo "The greatest number is: " . $number3;
}
?>