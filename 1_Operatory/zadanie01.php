<?php

$a = 10; //ma byc mniejsze od $b
$b = 15; // ma byc mniejsza od $c
$c = 22;

if ($a + $b > $c) {
    if (($a == $b) && ($b == $c)) {
        echo "rownoboczny";
    } elseif (($a == $b) ||($b == $c)) {
        echo "rownoramienny";
    } else {
        echo "roznoramienny";
    }
    
} else {
    echo "nie da sie utworzyc takiego trojkata";
}