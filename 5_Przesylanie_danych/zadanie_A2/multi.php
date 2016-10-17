<?php
// tutaj wczytaj zmienne z GET-a i przygotuj funkcję która wyświetli tabelkę
if (isset($_GET['width'])) {
    $szerok = $_GET['width'];
} else {
    $szerok = 5;
}
if (isset($_GET['height'])) {
    $wysok = $_GET['height'];
} else {
    $wysok = 10;
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie A2</title>
        <style type="text/css">
            td{
                border: 1px solid black;
                padding: 5px;
            }
            
            
        </style>
    </head>
    <body>
        <table>
            <?php
// tutaj użyj wcześniej przygotowanej funkcji
            for ($i = 1; $i <= $wysok; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $szerok; $j++) {
                    echo "<td>";
                    echo "$i x $j = " . $i * $j;
                    echo "</td>";
                }


                echo "</tr>";
            }
            ?>
        </table>

    </body>
