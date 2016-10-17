<style type="text/css">
       table {border-collapse: collapse;}
       td { border: 1px solid green;
       padding: 10px;
       }
</style>


<?php

function print2DTable($table) {
    echo '<table>';
    foreach ($table as $subTable) {  // rysuj rzad
        echo '<tr>';
        foreach ($subTable as $element) { //rysuj kolumne
            echo '<td>' . $element . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

function getMatrixTrace($array) {
    $sum = 0;
    for ($rzad = 0; $rzad < count($array); $rzad++) {
        for ($kolumna = 0; $kolumna < count($array[$rzad]); $kolumna++)
        if ($rzad == $kolumna) {
            $sum += $array[$rzad][$kolumna]; // pobierz wspolrzedne z tablicy
        }
    }

    return $sum;
}

$matrix = array(
    array(1, 2, 3, 4, 5),
    array(6, 7, 8, 9, 10),
    array(11, 12, 13, 14, 15),
    array(16, 17, 18, 19, 20),
    array(21, 22, 23, 24, 25),
);

print2Dtable($matrix);
