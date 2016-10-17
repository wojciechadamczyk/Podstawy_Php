<?php

// tutaj wczytaj zmienne z GET-a i przygotuj funkcję która wyświetli liczby
if (
        $_SERVER['REQUEST_METHOD'] === "GET" &&
        isset($_GET['start']) &&
        isset($_GET['end'])
       
        ) {
    $paramsOK = true;
} else {
    $paramsOK = false;
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A1</title>
</head>
<body>

<?php

// tutaj użyj wcześniej przygotowanej funkcji
if ($paramsOK) {
        for ($i = $_GET['start'];$i <= $_GET['end']; $i++) {
            echo "$i, ";
        }
        
        
} else {
                echo "bledne parametry";
        }
?>


</body>
</html>
