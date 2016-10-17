<?php

// tutaj umieść kod usuwający wartośc z ciasteczka
var_dump($_COOKIE);

if (isset($_COOKIE['User'])) {
    $name = $_COOKIE['User'];
} else {
    $name = " - ";
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie D1</title>
</head>
<body>
    <h1> Ciasteczko usunięte </h1>
</body>
</html>
