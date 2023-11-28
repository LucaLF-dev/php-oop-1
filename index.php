<?php

class Production {

    public $title;
    public $language;
    public $rating;


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
            $this->rating = 'il numero non è compreso tra 0 e 10';
            echo $this->rating;
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