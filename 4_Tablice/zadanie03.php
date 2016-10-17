<?php
function maxNumber($a) {
   rsort($a);
   return $a[0];
}

$tablica = array(
    1, 2, 3, 4, 5,
        
);
echo maxNumber($tablica);


function findMax2($a) {
    $max = null;
    foreach ($a AS $value) {
        if  ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}