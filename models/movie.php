<?php
class Movie{
    public $titolo;
    public $genere;
    public $durata;

    function __construct($_titolo, $_genere, $_durata){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->durata = $_durata;
    }

    public function AvvioFilm(){
        return 'Buona visione';
    }
}

?>