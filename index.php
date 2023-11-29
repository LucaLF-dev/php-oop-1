<?php

require_once __DIR__ . '/models/Production.php';
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/models/Serie.php';



$production1 = new Production('il Signore degli Anelli', 'inglese', '8');
$production2 = new Production('il Signore degli Anelli, il ritorno del re', 'inglese', '8');
$production3 = new Production('il Signore degli Anelli, le due torri ', 'italiano', '7');

$movie1 = new Movie('IL GLADIATORE', 'inglese', '3.75', 10000000, 155);
$movie2 = new Movie('FIRST MAN - IL PRIMO UOMO', 'inglese', '3.41', 147000, 141);
$movie3 = new Movie('THE POST', 'inglese', '3.25', 100005900, 118);
$movie4 = new Movie('IL SIGNORE DEGLI ANELLI', 'inglese', '3.75', 2458000, 210);
$movie5 = new Movie('OPPENHEIMER', 'inglese', '4.9', 80000000, 180);

$serie1 = new Serie('BREAKING BAD', 'inglese', '4.5', 8);
$serie2 = new Serie('LOST', 'inglese', '4.97', 12);
$serie3 = new Serie('SUITS', 'inglese', '3.2', 7);
$serie4 = new Serie('1992', 'inglese', '4.5', 1);
$serie5 = new Serie('1993', 'inglese', '4.5', 1);



$films = [
    // $production1,
    // $production2,
    // $production3,
    $movie1,
    $movie2,
    $movie3,
    $movie4,
    $movie5,
    $serie1,
    $serie2,
    $serie3,
    $serie4,
    $serie5,

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
        
        <?php if($film == $serie): ?>
            <p> <?= $film->getSeason() ?></p>
            <?php else: ?>
            <p> <?= $film->getProfit() ?></p>
    </div>

<?php
}
