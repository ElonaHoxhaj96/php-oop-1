<?php
require_once __DIR__ . '/./Movie.php';

$db_movies = [
    new Movie('Inception', 'Fantascienza / Thriller',"2:49 ",'Inglese', 2010, 'Christopher Nolan', 'Warner Bros Pictures'),
    new Movie('La dolce vita', 'Drammatico', '2:56', 'Italiano', 1960, 'Federico Fellini', 'Ponti-De Laurentiis'),
    new Movie('Parasite', 'Thriller / Drammatico','2:12', 'Coreano', 2019, 'Bong Joon-ho', 'Barunson E&A'),
    new Movie('Spirited Away','Animazione / Fantasy', '2:50','Giapponese', 2001, 'Hayao Miyazaki', 'Studio Ghibli'),
    new Movie('The Godfather', 'Crime / Drammatico', '2:55', 'Inglese', 1972, 'Francis Ford Coppola', 'Paramount Pictures'),

];

var_dump($db_movies)
?>

