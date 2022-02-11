<?php

Class Films
{
    private string $_titre;
    private DateTime $_sortie;
    private int $_duree;
    private Realisateurs $_real;
    private Acteurs $_acteurs;

    public function __construct(string $titre, string $sortie, int $duree, Realisateurs $real, Acteurs $acteurs){

        $this->_titre = $titre;
        $this->_sortie = new DateTime($sortie);
        $this->_duree = $duree;
        $this->_real = $real;
        $this->_acteurs = $acteurs;
        $real->ajouteFilms($this);
        $acteurs->ajoutFilms($this);
    }

    public function get_titre()
    {
        return $this->_titre;
    }

    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    public function get_sortie()
    {
        return $this->_sortie;
    }
 
    public function set_sortie($_sortie)
    {
        $this->_sortie = $_sortie;

        return $this;
    }

    public function get_duree()
    {
        return $this->_duree;
    }

    public function set_duree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }

    public function get_real()
    {
        return $this->_real;
    }

    public function set_real($_real)
    {
        $this->_real = $_real;

        return $this;
    }

    public function get_acteurs()
    {
        return $this->_acteurs;
    }

    public function set_acteurs($_acteurs)
    {
        $this->_acteurs = $_acteurs;

        return $this;
    }

    public function __tostring()
    {
        return "Film : $this->_titre<br> Date de sortie : ".$this->_sortie->format('Y-m-d')."<br> Durée : $this->_duree  minutes<br> Réalisateur : ".$this->_real->get_prenom()." ".$this->_real->get_nom()."";
    }
}