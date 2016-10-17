<?php

$matrix = array(
    1, 2, 3, 4, 5,
    6, 7, 8, 90, 10,
    11, 12, 13, 14, 15,
    16, 17, 18, 190, 20,
    21, 22, 23, 24, 125,
);

function findMax1($tab) {
    rsort($tab);
//    var_dump ($tab);
    return $tab[0];
}

function findMax2($tab) {
//    return max($tab);
        $max = 0;
    foreach ($tab as $number) {
            echo "Liczba: $number, aktualny max: $max" . "<br>";
        if ($number > $max) {
            $max = $number;
        }
    }
}

//var_dump ($matrix);
echo findMax1($matrix);
echo "<br>";
echo findMax2($matrix);
