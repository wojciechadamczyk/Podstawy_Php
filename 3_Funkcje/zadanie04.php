<?php

function max2($a, $b) {
    if ($a > $b) {
        return $a;
    } else {
        if ($b > $a) {
            return $b;
        }
    }
}

function max3($a, $b, $c) {
    $x = max2($a, $b);
    return max2($x, $c);
}

var_dump(max3(12, 19, 3));
