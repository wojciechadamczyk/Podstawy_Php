<?php
session_START();
/* Tutaj umieść kod który:
 * 1. Wczyta tablicę z ocenami z sesji (jeżeli jej nie ma to ją utworzy)
 * 2. Wczyta dane przesłane POST-em
 * 3. Jeżeli dane spełniają założenia (liczba z zakresu 1-6) to doda ją na końcu tablicy
 * 4. nastawi nową wartość w sesji (do sesji wkładamy tablicę z nową oceną)
 * 5. Wyliczy średną  z ocen
*/

$polski = null;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $_SESSION['polski'] = $_POST['polski'];
    $_SESSION['matematyka'] = $_POST['matematyka'];
    

if (isset($_SESSION[polski])) {
    $polski = $_SESSION['polski'];

}

if (isset($_SESSION[matematyka])) {
    $polski = $_SESSION['matematyka'];
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie C2</title>
</head>
<body>

<?php
echo "Polski: "
// tutaj umieść kod wyświetlający tablicę z ocenami i średną z nich

?>

<!--
Tutaj napisz formularz używając HTML

-->
<h1> Wartosc 
</body>
</html>
