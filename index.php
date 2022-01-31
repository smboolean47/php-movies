<?php
require_once __DIR__ . '/classes/Movie.php';
require_once __DIR__ . '/classes/Actor.php';

$michael = new Actor([
    "nome" => "Michael J.", 
    "cognome" => "Fox"
]);
$christopher = new Actor([
    "nome" => "Christopher", 
    "cognome" => "Lloyd"
]);

$movies = [
    new Movie("Ritorno al futuro", "Hill Valley, California, 25 ottobre 1985. Marty McFly è un diciassettenne studente di liceo.", NULL, [$michael, $christopher], 1985),
    new Movie("Via col vento", "Alla vigilia della guerra civile americana nel 1861, Rossella O'Hara vive a Tara, la piantagione di cotone della sua famiglia in Georgia, con i suoi genitori e due sorelle.", 238, [$michael, $christopher], 1939),
];

var_dump($movies);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>I nostri film preferiti</h1>
    <?php foreach($movies as $movie) { ?>
        <h2><?php echo $movie->getTitolo(); ?></h2>
        <p><?php echo $movie->getTrama(); ?></p>
        <h3>Attori:</h3>
        <ul>
            <?php foreach($movie->attori as $attore) {?>
            <li><?php echo "{$attore->getNome()} {$attore->getCognome()}"; ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
</body>
</html>