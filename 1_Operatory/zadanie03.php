<?php

$a = 10;
$b = 20;

function rectGetData($a,$b) {
    $obw = $a * 2 + $b * 2;
    $pol = $a * $b;
    
    $zwrot = array();
    $zwrot[0] = $obw;
    $zwrot[1] = $pol;
    return $zwrot;
}

$daneProstokata = rectGetData($a,$b);
$obw = $daneProstokata["obwod"];
$pol = $daneProstokata["pole"];
var_dump($daneProstokata);

echo "Prostokat o bokach $a, $b<br>";
echo "obwod: ". $obw ."<br>";
echo "pole: ". $pol;
