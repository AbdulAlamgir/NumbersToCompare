<?php

function printTableUsingWhileLoop($number, $limit) {
    $i = 1;

    echo "Table of $number:\n";

    while ($i <= $limit) {
        echo "$number x $i = " . ($number * $i) . "\n";
        $i++;
    }
}

//Table of 2
printTableUsingWhileLoop(2, 10);

?>
