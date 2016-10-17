<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista zadan</title>
    </head>
    <body>
        <form action="#" method="POST">
            <label>Dodaj zadanie :
                <input type="text" name="nowe">
            </label>
            <input type="submit" value="Dodaj">
        </form>



    </form>
    <?php
    session_start();
//    var_dump($_SESSION);
    var_dump($_COOKIE);
//    unset($_SESSION['zadania']);
    if (isset($_SESSION['zadania'])) {
    $k = $_SESSION['zadania']; 
    } elseif (isset($_COOKIE['zadania'])) {
        $k = unserialize($_COOKIE['zadania']);
    } else {        
        $k = array();
    }
    
    echo '<ul>';
    if (!empty($k)) {
        foreach ($k as $v) {
            echo "<li> $v </li>";
        }
    }
        if (isset($_POST['nowe'])) {
            $k[] = $_POST['nowe'];
                echo "<li> {$_POST['nowe']} </li>";
        }
        

        echo '</ul>';
    $zad =  serialize($k);
    setcookie('zadania', $zad, time() + 3600);
    
    $_SESSION['zadania'] = $k;
    ?>

</body>
</html>


<!--
Stwórz aplikację służącą do trzymania prostej listy zadań.

 Strona ma pokazywać wszystkie zadania do zrobienia oraz
formularz do dodania zadania.
 Korzystaj z sesji do trzymania zadań.
 Zadania trzymaj w tablicy (jako zwykłe napisy).
 Jeżeli strona jest generowania przez POST, to dodaj zadanie.
 Do trzymania tablicy w ciasteczku użyj funkcji serialize, 
a do wczytania unserialize.-->