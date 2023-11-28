<?php

class Production
{

    public $title;
    public $language;
    public $rating;


    function __construct($_title, $_language, $_rating)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
    }

    public function setRating($rating)
    {
        if (is_numeric($rating) && $rating >= 0 && $rating <= 10) {
            $this->rating = $rating;
        } else {
            //'il numero non è compreso tra 0 e 10';
            $this->rating = null;
        }
    }

    public function getRating() {
        return $this->rating;
    }

    function getLanguage()
    {
        //return $this->language;
        if (is_null($this->language)) {
            return null;
        } else {
            return $this->language;
        }
    }
};

$production1 = new Production('il Signore degli Anelli', 'inglese', '8');
$production2 = new Production('il Signore degli Anelli, il ritorno del re', 'inglese', '8');
$production3 = new Production('il Signore degli Anelli, le due torri ', 'italiano', '20');


$films = [
    $production1,
    $production2,
    $production3
];

foreach ($films as $film) {
?>

    <div>
        <h1><?= $film->title  ?></h1>
        <p><?= $film->getLanguage() ?? 'Lingua non inserita' ?></p>
        <p>
            <?php echo $film->getRating() ?? 'il numero inserito non è compreso tra 0 e 10' ?>
        </p>
    </div>

<?php
}
