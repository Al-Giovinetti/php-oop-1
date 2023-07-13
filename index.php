<?php
class Movie {

    //PROPIETA'
    public $title;
    public $genre;
    public $plot;
    public $year;

    //COSTRUTTORE
    function __costructor(String $_title, String $_genre, String $_plot, Int $_year){
        $this->title = $_title;
        $this->genre = $_genre;
        $this->plot = $_plot;
        $this->year = $_year;
    }

    //METODI

}
