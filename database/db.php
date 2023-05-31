<?php
require_once __DIR__ . '/../models/movie.php';
require_once __DIR__ . '/../models/genere.php';

$arrayMovie = [
    new Movie('Vacanze di natale', new Genere('Comico', 'Bambini'), '120 min.'),
    new Movie('IT', new Genere('Horror', 'Triller'), '160 min.')
];

?>