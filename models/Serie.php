<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production {

    public $season;
    

    function __construct(string $_title, string $_language, $_rating, $_season) {

        parent::__construct($_title, $_language, $_rating);
        $this->setSeason($_season);
    }
 

    public function getTitle() {
        return 'Serie :' . ' ' . parent::getTitle();
    }
  

    public function setSeason($season) {
        if (is_numeric($season) ) {
            $this->season = intval($season);
        } else {
            $this->season = 1;
        }
    }

    public function getSeason() {
        return $this->season . ' ' . 'stagione';
    }

    
}