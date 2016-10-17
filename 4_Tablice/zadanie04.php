<?php
function findNumbers($table) {
    //foreach - do zliczenia sumy elementow w tablicy
    
    //obliczenie sredniej : sume elementow /liczbe elementow
    //liczba elementow - count($table);
    
    //foreach sprawdzajacy czy dany element jest mneijszy od sredniej
        foreach ($table as $value) {
            //if sprawdzajacy czy dodac dany element do nowej tablicy
            $returnTable[] = $value;
        }
        return $returnTable;
}

$array = array(1,2,3,4,5,6,7,8);