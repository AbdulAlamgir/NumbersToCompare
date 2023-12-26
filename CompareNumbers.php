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




<?php
$number1 = 10;
    switch($number1){
        case 2;
            break;
        case 3;
            break;
        case 6;
            break;
        case 4;
            break;
        default:
            echo "your name!";
    }

for ($i=0; $i>=$number1; $i++){
    if($number1 == $i){
        echo "Got you";
        break;
    }
}

?>