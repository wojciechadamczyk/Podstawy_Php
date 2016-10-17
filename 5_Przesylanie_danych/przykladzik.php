<?php

if ($_SERVER['REQUEST_METHOD'] === "GET") {
    echo $_GET['imie'];
} else {
    echo "nie get";
}

echo "<br><br>";

$imiona = array('Jan', 'kinga', 'tomasz');
foreach ($imiona as $imie) {
    echo '<a'
}