<?php
// tutaj umieść kod sprawdzający czy weszliśmy na stronę POST-em i wczytujący odpowiednie dane do zmiennych.
if (
        $_SERVER['REQUEST_METHOD'] === "POST" &&
        isset($_POST['userName']) &&
        isset($_POST['userSurname'])
) {
    $tekst = "Witaj " . $_POST['userName'] . " " . $_POST['userSurname'];
} else {
    $tekst = "";
}
?>

<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <meta charset="UTF-8">
        <title>Zadanie B1</title>
    </head>
    <body>

<?php
// tutaj umieść kod wyświetlający dane przesłane POST-em
echo $tekst;
?>


        <form action="#" method="POST">
            <label>
                Imię:
                <input type="text" name="userName">
            </label>
            <label>
                Nazwisko:
                <input type="text" name="userSurname">
            </label>
            <input type="submit">
        </form>

    </body>
</html>
