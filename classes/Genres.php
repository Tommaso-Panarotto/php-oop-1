<?php

class Genres
{
    //instance variables
    public $genres;

    function __construct(...$_genres)
    {
        $this->genres = $_genres;
    }

    //function if it doesn't have a genre
    function haveAGenre()
    {
        if (empty($this->genres)) {
            $this->genres = 'nessun genere';
        } else {
            return $this->genres;
        }
    }
}
