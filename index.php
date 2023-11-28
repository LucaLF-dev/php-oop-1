<?php

class Production {

    public $title;
    public $language;
    public $rating = 0;


    function __construct($_title, $_language, $_rating)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->rating = $_rating;
    }

    public function setRating($rating) {
        if (is_numeric($rating) && $rating >= 0 && $rating <= 10) {
            $this->rating = $rating;
        } else {
            $this->rating = 0;
        }
    }

    function getLanguage()
    {
      return $this->language;
       if (is_null($this->language)) {
         return 'unknow';
       } else {
         return $this->language;
       }
    }
}

$production1 = new Production( 'il Signore degli Anelli', 'inglese', '8');
$production2 = new Production( 'il Signore degli Anelli, il ritorno del re', 'inglese', '8');
$production3 = new Production( 'il Signore degli Anelli, le due torri ', 'inglese', '7');


$films = [
    $production1,
    $production2,
    $production3
];

foreach ($films as $film) {
    ?>

  <div>
    <h1><?= $film->title  ?></h1>
    <p><?=  $film->language ?></p>
    <p>
      <?php $film->setRating($rating) ?>
    </p>
  </div>

<?php
}