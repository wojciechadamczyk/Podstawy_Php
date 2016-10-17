<?php
session_start();
// tutaj umieść kod usuwający wartośc z sesji
unset($_SESSION['counter']);
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie C1</title>
</head>
<body>
    <h1> Sesja wyzerowana </h1>
</body>
</html>
