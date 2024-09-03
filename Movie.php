<?php
//creo la classe Movie 
class Movie{
    public $title;
    public $genre ;
    public $duration;
    public $lenguage;
    public $year;
    public $director;
    public $production_house;

    //creo la cuzione costruttore che mi permetterà di estrapolare più velocemente i dati fondamentali della mia class 
    public function __construct($_title, $_genre, $_duration, $_lenguage, $_year, $_director, $_production_house)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->lenguage = $_lenguage;
        $this->year = $_year;
        $this->director = $_director;
        $this->production_house = $_production_house;
    }
}
