<?php
function findinArray($array,$needle,&$index) {
    foreach ($array as $key => $element) {
        if ($element == $needle) {
            $index = $key;
            return true;
        }
    }
    
    
   return false; 
}
$i = null;
$szukana = 15;
$table = array(12,13,14,15,16,17);
var_dump (findinArray($table,$szukana,$i));

echo "szukana znajduja sie pod indeksem $i";