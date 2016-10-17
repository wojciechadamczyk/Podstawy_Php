<?php

function perfectNumber($n) {
    $sumaDzielnikow = 1;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $sumaDzielnikow += $i;
        }
    }
    
    
    //if ($sumaDzielnikow == $n) {
     //   return true;
    //} else {
     //   return false;
        
    //}
    return ($sumaDzielnikow == $n);
}

var_dump(perfectNumber(1));