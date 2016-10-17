<?php

$client1 = array(

'imie' => 'Anna',

'miasto' => 'Warszawa',

'wiek' => '28'

);

$client2 = array(

'imie' => 'Anna',

'miasto' => 'Warszawa',

'wiek' => 28

);

var_dump($client1 === $client2);