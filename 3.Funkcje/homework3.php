<?php

$a = "0";
echo strlen($a);
echo empty($a) ? $a : 5;
echo $a ?: 5;

/*
Co zostanie wyświetlone przez funkcje?
a. 105
b. 100
c. 050
d. 005
e. 150


Poprawna odpowiedź:
Dlaczego:

 */