<?php

function rentCost($days) {
    if ($days <= 1) {
        $price = 200;
    } elseif ($days <=3) {
        $price = 180;
        } elseif ($days <=7) {
        $price = 160;
    } else {
        $price = 150;
    }
    
    $cost = $price * $days;
    
    $weeksFloat = $days / 7;
    $weeks = (int) $weeksFloat;
    
    $cost -= $weeks * 50;
    return $cost;
}

var_dump(rentCost(8));