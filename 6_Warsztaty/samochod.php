<?php

class Car {

    public $nazwa;
    public $spalanie;
    public $kolor;
    private $iloscPaliwaWBaku;

    public function jedz($ileKilometrow) {
// przemiesc samochod   
//zmiejsz ilosc paliwa w baku     
        $this->zaktualizujStanBaku($ileKilometrow);
    }

    protected function zaktualizujStanBaku($ileKilometrow) {
        $this->iloscPaliwaWBaku -= $this->spalanie * $ileKilometrow;
    }

}

class Amphibia extends Car {

    public function plyn($ileKilometrow) {
        $this->zaktualizujStanBaku($ileKilometrow);
    }

}

$jakisPojazd = new Amphibia();

//$vw = new Car();
//$vw->jedz(10);

var_dump($jakisPojazd);

//var_dump($vw);


