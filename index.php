<?php
class Movie {

    //PROPIETA'
    public $title;
    public $genre;
    public $year;

    //COSTRUTTORE
    function __costructor(String $_title, String $_genre, Int $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->year = $_year;
    }

    //METODI
    public function getTitle(){
        return $this->title;
    }
}

// ISTANZA D' OGGETTO 1

$filmA = new Movie("Independence Day","Fantascienza",1996);
echo $filmA->getTitle();

// ISTANZA D' OGGETTO 2
$filmB = new Movie("The Mask - Da zero a mito","Commedia",1994);
echo $filmB->getTitle();
