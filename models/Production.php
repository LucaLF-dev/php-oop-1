<?php
class Production
{

    public $title;
    public $language;
    public $rating;


    function __construct(string $_title, string $_language, $_rating)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->setRating($_rating);
    }

    public function getTitle()
    {
        return $this->title;
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

    public function getRating()
    {
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
