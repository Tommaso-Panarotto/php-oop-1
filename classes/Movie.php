<?php

class Movie
{

    //instance variables
    public $title;
    public $genre;
    public $description;
    public $classification;

    //constructor
    function __construct($_title, $_description, $_genre, $_classification)
    {
        $this->title = $_title;
        $this->description = $_description;
        $this->genre = $_genre;
        $this->classification = $_classification;
    }
}
