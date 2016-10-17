<?php

$table = array(
    "pierwsza",
    "druga",
    "trzecia",
    "czwarta"
    );

function printArray($array) {
    foreach ($array as $value) {
        echo $value . "<br>";
    }
}

printArray($table);
