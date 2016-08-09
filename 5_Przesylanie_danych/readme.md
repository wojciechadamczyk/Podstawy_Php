# PHP &ndash; Podstawy PHP
## Przesyłanie danych


## Część A &ndash; zadania do zrobienia z wykładowcą

### Zadanie A1
Napisz stronę, która wczyta ze zmiennej superglobalnej dwie zmienne: ```$start``` i ```$end``` (dla uproszczenia załóżmy, że będziemy przesyłać tylko liczby całkowite). Następnie strona wypisze wszystkie liczby od ```$start``` do ```$end```. Jeżeli zmienne nie są przesłane, to strona ma wypisać wypisz odpowiednią informację na ten temat.
Na drugiej stronie stwórz kilka linków w **html-u** do pierwszej strony. Informacje przesyłaj za pomocą GET.

### Zadanie A2
Na stronie napisz formularz przyjmujący imię i nazwisko. Formularz ten ma przekierowywać do tej samej strony metodą POST.
Jeżeli strona została uruchomiona przez zapytanie POST (sprawdź to w superglobalnej zmiennej ```$_SERVER['REQUEST_METHOD']```), to ponad formularzem ma się wyświetlić napis "Witaj, <podane imię> <podane nazwisko>".

### Zadanie A3
W zadaniu stwórz trzy strony, które mają mieć następującą funkcjonalność:
* Pierwsza strona ma nastawiać informacje w sesji pod kluczem ```counter``` na **0**.
* Druga strona ma wyświetlać zawartość sesji pod kluczem ```counter``` i zwiększać ją o **1**. Jeżeli nie ma takich danych w sesji, to strona powinna wyświetlić odpowiednie informacje.
* Trzecia strona powinna kasować dane z sesji (tylko te trzymane pod kluczem ```counter```).

### Zadanie A4
W tym zadaniu stwórz trzy strony:
* Pierwsza strona ma nastawiać ciasteczko o nazwie ```User``` na Twoje imię.
* Druga strona ma wyświetlać zawartość ciasteczka ```User```. Jeżeli nie ma takiego ciasteczka, to powinna wyświetlić odpowiednie informacje.
* Trzecia strona powinna kasować ciasteczko o nazwie ```User```.

## Część B &ndash; zadania do pracy samodzielnej
### Zadanie B1
W tym zadaniu dopisz funkcjonalność do dwóch stron:
* Pierwsza strona (**multi.php**) ma pobierać dwie zmienne z GET o nazwach ```width``` i ```height``` (jeżeli informacje nie są przesłane to ```width = 5``` i ```height = 10```), a następnie generować tabliczkę mnożenia o podanej wysokości i szerokości (podobną jak w zadaniu z pętli, które robiliście pierwszego dnia),
* Na drugiej stronie (**index.php**) stwórz kilka linków do pierwszej strony. Przesyłaj informację za pomocą GET.

### Zadanie B2
Na stronie napisz formularz, który będzie zawierał jedno pole tekstowe i jeden checkbox. Formularz ten ma przekierowywać do tej samej strony metodą POST. Skrypt ma sprawdzać, czy wpisany przez użytkownika tekst zawiera wulgaryzmy &ndash; jeżeli tak, to powinien zastąpić je dowolnymi znakami. Na przykład frazę „cholera, znowu to PHP“ powinien zastąpić frazą „*******, znowu to PHP“).
Jeżeli użytkownik zaznaczy checkbox „Jestem świadomy konsekwencji“, to skrypt nie sprawdzi wulgaryzmów.
Tekst wpisany przez użytkownika ma wyświetlić się (w formie ocenzurowanej lub nie) pod formularzem.
Dodatkowo postaraj się, aby liczba gwiazdek odpowiadała liczbie znaków w cenzurowanym słowie.

### Zadanie B3
Napisz skrypt przeliczający waluty:
* EUR → USD
* USD → EUR
* EUR → PLN
* PLN → EUR
* USD → PLN
* PLN → USD
Skrypt ma wyświetlać formularz zawierający następujące pola do wpisania kwoty, pola typu radio do wybrania z jakiej i na jaką walutę przeliczamy oraz przycisk „Przelicz“. Przeliczona kwota powinna pokazać się ponad formularzem.

### Zadanie B4
Napisz skrypt, który na podstawie podanych ocen (formularz ocen z przedmiotów) liczy ich średnią arytmetyczną. Oceny trzymaj w tablicy, którą będziesz wkładać do sesji. Zadbaj o walidację wprowadzanych ocen (nie mniej niż 2 i nie więcej niż 5).
Pamiętaj, żeby sprawdzać, czy tablica z ocenami istnieje w sesji &ndash; jeżeli nie, to ją stwórz.
Wszystkie zapamiętane oceny i ich średnia powinny być wyświetlane pod formularzem.
Do trzymania tablicy w ciasteczku użyj funkcje ```serialize```, a do wczytania ```unserialize```.

### Zadanie B5
W tym zadaniu stwórz dwie strony:

Na pierwszej stronie powinien znajdować się formularz z dwoma polami tekstowymi:
* pierwsze pole ma przybierać nazwę ciasteczka,
* drugie &ndash; jego wartość.

Formularz ma przekierowywać do tej samej strony metodą POST.
Jeżeli na tę stronę wejdziemy metodą POST, to ma ono tworzyć nowe ciasteczko o podanej nazwie i wartości.
Na drugiej stronie wyświetl wszystkie ciasteczka, do których masz dostęp.
Jak wczytać wszystkie ciasteczka? Przeczytaj [tutaj][all-cookies].

### Zadanie B6
W tym zadaniu stwórz dwie strony.
Na pierwszej stronie wyświetl wszystkie ciasteczka, do których masz dostęp. Przy każdym z nich wygeneruj link do drugiej strony przekazując GET-em nazwę ciasteczka.
Na drugiej stronie poinformuj o tym, że usuwasz ciasteczko i następnie je usuń. Nazwę ciasteczka pobierz z GET.


<!-- Links -->
[all-cookies]:http://stackoverflow.com/questions/9577029/can-i-display-all-the-cookies-i-set-in-php
