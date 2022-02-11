
<?php

class Acteurs extends Personnes
{
    private array $_films;

    public function __construct(string $nom, string $prenom, string $sexe, string $naissance)
    {
        parent::__construct($nom, $prenom, $sexe, $naissance);
        $this->_films = [];
    }

    public function ajoutFilms($films){

        array_push($this->_films, $films);

        return $this;
    }

    public function Filmographie()
    {
        foreach($this->_films as $film){
            echo "".$film->get_titre()." : ".$film->get_sortie()->format('Y')."".'<br>';
        }
    }

    public function __toString()
    {
        return "Acteur : $this->_prenom $this->_nom, Sexe : $this->_sexe, Age : ".$this->Age()->format('%Y ans').'';
    }
}
