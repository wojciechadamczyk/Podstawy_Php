<?php

$a = 5;
$b = 6;
$c = 8;

if (
        (pow($a,2) + pow($b,2) == pow($c,2)) || 
        (pow($b,2) + pow($c,2) == pow($a,2)) ||
        (pow($a,2) + pow($c,2) == pow($b,2)) 
   ) {
    echo "są to liczby trójki pitagorejskiej.";
    
    
    
    
} else {
    echo "nie sa to liczby z trojki pitagorejskiej";
}
        