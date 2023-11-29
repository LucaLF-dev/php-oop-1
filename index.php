<?php

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/Serie.php';



$production1 = new Production('il Signore degli Anelli', 'inglese', '8');
$production2 = new Production('il Signore degli Anelli, il ritorno del re', 'inglese', '8');
$production3 = new Production('il Signore degli Anelli, le due torri ', 'italiano', '7');
$movie1 = new Movie('il Signore degli Anelli', 'inglese', '8', 1000, 3 );

$films = [
    // $production1,
    // $production2,
    // $production3,
    $movie1,
];

$movies = [
    new Movie('il Signore degli Anelli 1', 'inglese', '8', 1000, 300),
    new Movie('il Signore degli Anelli 2', 'inglese', '8', 1000, 300),
    new Movie('il Signore degli Anelli 3', 'inglese', '8', 1000, 'tre'),
];

var_dump($films);

foreach ($films as $film) {
?>

    <div>
        <h1><?= $film->getTitle(); ?></h1>
        <p><?= $film->getLanguage() ?? 'Lingua non inserita' ?></p>
        <p>
            <?php echo $film->getRating() ?? 'il numero inserito non è compreso tra 0 e 10' ?>
        </p>
        <p>
            <?php echo $film->getProfit() ?>
        </p>
        <p>
            <?php echo $film->getDuration() ?>
        </p>
    </div>

<?php
}
