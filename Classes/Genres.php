<?php

class Genres
{
    private array $_genres;

    public function __construct(array $genres)
    {
        $this->_genres = [];
    }

    public function get_genres()
    {
        return $this->_genres;
    }
 
    public function set_genres($_genres)
    {
        $this->_genres = $_genres;

        return $this;
    }
}