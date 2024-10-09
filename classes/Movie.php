<?php

class Movie
{

    //instance variables
    public $title;
    public $genres;
    public $description;
    public $classification;

    //constructor
    function __construct($_title, $_description, Genres $_genres, $_classification = 'T')
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->genres = $_genres;
        $this->classification = $_classification;
    }

    //function if is visible for all ages
    function isVisible()
    {
        if ($this->classification !== 'T') {
            return "è visibile per " . $this->classification;
        } else {
            return "è visibile per tutti";
        }
    }
}
