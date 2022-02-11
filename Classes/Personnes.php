<?php

abstract class Personnes
{
   protected string $_nom;
   protected string $_prenom;
   protected string $_sexe;
   protected DateTime $naissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_naissance = new DateTime($naissance);
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    public function get_sexe()
    {
        return $this->_sexe;
    }

    public function set_sexe($_sexe)
    {
        $this->_sexe = $_sexe;

        return $this;
    }

    public function getNaissance()
    {
        return $this->naissance;
    }

    public function setNaissance($naissance)
    {
        $this->naissance = $naissance;

        return $this;
    }

    public function Age()
    {
        return date_diff($this->_naissance, new DateTime());
    }
}


