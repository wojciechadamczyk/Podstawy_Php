<html>
    <head>
        <meta charset="UTF-8">
        <title>Ostatnie odwiedziny</title>
    </head>
    <body>
        <?php
               if(isset($_COOKIE['last'])) {
                   $last = $_COOKIE['last'];
                   echo 'Witaj ponownie, ostatnio byles na stronie: ' . $last;
               } else {
                   setcookie('last', date(DATE_RSS), time() + 3600 * 100);
                   echo 'Witaj po raz pierwszy na stronie';
                   
               }
               echo '<br><br><a href=kasuj.php>Skasuj przechowywana date</a>';
               
               
        ?>
        
    </body>
</html>


<!--Zadanie

Stwórz stronę, która wita gości i mówi im,kiedy ostatnio byli na naszej stronie.
 Daj też możliwość usunięcia ciasteczka (przez guzik). Guzik może być linkiem 
do innej strony którausunie ciasteczko a potem przekieruje nas na stronę pierwotną.
Jak robić przekierowania możesz przeczytać tutaj: http://stackoverflow.com/a/768472

Wskazowki

 Korzystaj z ciasteczek do zapisania danych, kiedy użytkownik był na stronie.
 Uzależnij komunikat od istnienia ciasteczka (jak odwiedzamy stronę pierwszy 
raz, to ma być inny, niż gdy wchodzimy na nią po raz kolejny).-->