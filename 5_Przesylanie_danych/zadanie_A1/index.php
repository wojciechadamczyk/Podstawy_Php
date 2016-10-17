<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Zadanie A1</title>
</head>
<body>

<?php

// tutaj wygeneruj kilka linków
// możesz to zrobić np. za pomocą pętli
for ($i=0;$i < 20;$i = $i + 2) {
    $j = $i + 25;

    echo '<a href=numbers.php?start=' .$i. '&end='.$j.'">od '.$i.' do '.$j.'</a>';
        echo '<br>';
}
?>


</body>
</html>
