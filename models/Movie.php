<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production {

    public $profit;
    public $duration;

    function __construct(string $_title, string $_language, $_rating, $_profit, $_duration ) {

        parent::__construct($_title, $_language, $_rating);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }

    public function getTitle() {
        return 'Film :' . ' ' . parent::getTitle();
    }

    public function setProfit($profit) {
        if (is_numeric($profit) ) {
            $this->profit = intval($profit);
        } else {
            $this->profit = null;
        }
    }

    public function getProfit() {
        return $this->profit . ' ' . 'euro';
    }

    public function setDuration($duration) {
        if (is_numeric($duration) ) {
            $this->duration = intval($duration);
        } else {
            $this->duration = null;
        }
    }

    public function getDuration() {
        return $this->duration . ' ' . 'minuti';
    }
}