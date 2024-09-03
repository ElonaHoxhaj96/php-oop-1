<?php

class Movie{
    public $title;
    public $genre ;
    public $lenguage;
    public $year;
    public $director;
    public $production_house;

    function __construct($_title, $_genre, $_lenguage, $_year, $_director, $_production_house)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->lenguage = $_lenguage;
        $this->year = $_year;
        $this->director = $_director;
        $this->production_house = $_production_house;
    }
}
