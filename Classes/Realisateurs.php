
<?php

class Realisateurs extends Personnes
{
    private  array $_films;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance)
    {
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->_films = [];
    }

    public function ajouteFilms($films)
    {
        array_push($this->_films, $films);

        return $this;
    }

    public function Realisations(){

        foreach($this->_films as $film){
            echo "".$film->get_titre()." Sortie en : ".$film->get_sortie()->format('Y')."";
        }
    }
}
