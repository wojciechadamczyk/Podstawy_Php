<?php
session_start();
// tutaj umieść kod wczytujący wartośc sesji
if (isset($_SESSION['counter'])) {
    $_SESSION['counter'] ++;
    $tekst = $_SESSION['counter'];
} else {
    $tekst = "---";
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie C1</title>
    </head>
    <body>
        <h1> Wartość wczytana z sesji to: <?php echo $tekst; ?>  </h1>
    </body>
</html>
