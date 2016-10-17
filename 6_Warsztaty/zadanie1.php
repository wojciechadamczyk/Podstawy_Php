<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie 1</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $name = $_POST['name'];
        echo "witaj #name";
    }
    
    ?>
     <form action="#" method="POST">
    <label>
        Wpisz Imie: </label><br>
        <input type="text" name="name"</input><br>
        <input type="text" name=""wyslij"</input><br>
       
        </form> 
</body>