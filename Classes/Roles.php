<?php

class Roles
{
    private string $_perso;
    private array $_acteurs;

    public function __construct(string $perso){
        $this->_perso = $perso;
        $this->_acteurs = [];
    }

    public function get_perso()
    {
        return $this->_perso;
    }

    public function set_perso($_perso)
    {
        $this->_perso = $_perso;

        return $this;
    }

    public function get_films()
    {
        return $this->_films;
    }

    public function set_films($_films)
    {
        $this->_films = $_films;

        return $this;
    }
}
