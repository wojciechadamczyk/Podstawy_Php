<?php

class Book {
    public $name = "Brak tytulu";
    public $price = 0.0;
    public $author = "Autor nieznany";
    private $catalogNumber = -1;
}

$bookA = new book();
$bookB = new book();

$bookA->name = "Rok 1984";
$bookA->price = 21.50;
$bookA->author = "George Orwell";

$bookA->cover = "hard";

var_dump($bookA->name);
echo "Ksiazka ma tytul";