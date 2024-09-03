<?php
// Creo la classe Movie 
class Movie {
    public $title;
    public $genre;
    public $duration;
    public $language;
    public $year;
    public $director;
    public $production_house;

    // Creo il costruttore che mi permetterà di estrapolare più velocemente i dati fondamentali della mia classe 
    public function __construct($_title, $_genre, $_duration, $_language, $_year, $_director, $_production_house) {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->language = $_language; 
        $this->year = $_year;
        $this->director = $_director;
        $this->production_house = $_production_house;
    }
}
