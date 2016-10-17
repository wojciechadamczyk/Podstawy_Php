<?php

function exchange ($amount, &$ten, &$five, &$two, &$one) {
    
    $amount = (int)$amount;
    
    $ten = (int)($amount / 10);
    $amount = $amount - $ten * 10;
    $five = (int)($amount / 5);
    $amount = $amount - $five * 5;
    $two = (int)($amount / 2);
    $amount = $amount - $two * 2;
    $one = (int)($amount / 1);
    $amount = $amount - $one *1;
    
    
}

$kwota = 188;
$dziesiatki = 0;
$piatki = 0;
$dwojki = 0;
$jedynki = 0;

exchange($kwota, $dziesiatki, $piatki, $dwojki, $jedynki);

echo "dziesiatki :" . $dziesiatki . "<br>";
echo "piatki :" . $piatki . "<br>";
echo "dwojki :" . $dwojki . "<br>";
echo "jedynki :" . $jedynki . "<br>";