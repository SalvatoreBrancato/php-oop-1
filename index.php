<!-- - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
require_once __DIR__ . '/models/movie.php';
require_once __DIR__ . '/models/genere.php';
require_once __DIR__ . '/database/db.php';

// $FilmUno = new Movie('Vacanze di natale', new Genere('Comico', 'Bambini'), '120 min.');
// $FilmDue = new Movie('IT', new Genere('Horror', 'Triller'), '160 min.');

// var_dump($FilmUno);
// var_dump($FilmDue);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <?php foreach( $arrayMovie as $elem ) { ?>
    <ul><?php echo $elem->titolo; ?>
        <li><?php echo $elem->genere->genere1;?></li>
        <li><?php echo $elem->genere->genere2;?></li>
        <li><?php echo $elem->durata; ?></li>
    </ul>
    <?php } ?>
    <hr>

    <h3><?php echo $arrayMovie[0]->AvvioFilm()?></h3>

</body>
</html>