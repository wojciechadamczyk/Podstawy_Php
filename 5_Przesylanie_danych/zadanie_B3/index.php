<?php
var_dump ($_POST)
// tutaj umieść kod który będzie przeliczał stopnie (najlepiej napisz do tego funkcję i jej użyj)
if (
        $_SERVER['REQUEST_METHOD'] === "POST"
        isset($_POST['name']) &&
        isset($_POST['value'])
        
        ) {
    
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie B3</title>
</head>
<body>

<?php

// Tutaj umieść kod który będzie wyświetlał przeliczoną wartość

?>

<form action="#" method="POST">
    <label>
        Temperatura:
        <input type="number" min="0.00" step="0.01" name="degrees">
    </label>
    <input type="submit" name="convertionType" value="celcToFahr">
    <input type="submit" name="convertionType" value="FahrToCelc">
</form>

</body>
</html>
