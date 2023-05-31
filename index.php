<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
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

$FilmUno = new Movie('Vacanze di natale', 'Comico', '120 min.');
$FilmDue = new Movie('IT', 'Horror', '160 min.');

var_dump($FilmUno);
var_dump($FilmDue);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul><?php echo $FilmUno->titolo; ?>
        <li><?php echo $FilmUno->genere; ?></li>
        <li><?php echo $FilmUno->durata; ?></li>
    </ul>
    <hr>
    <ul><?php echo $FilmDue->titolo; ?>
        <li><?php echo $FilmDue->genere; ?></li>
        <li><?php echo $FilmDue->durata; ?></li>
    </ul>

    <h3><?php echo $FilmUno->AvvioFilm()?></h3>

</body>
</html>