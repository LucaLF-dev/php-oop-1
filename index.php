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
}