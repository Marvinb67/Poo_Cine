<?php

require 'classes/Personnes.php';
require 'classes/Acteurs.php';
require 'classes/Realisateurs.php';
require 'classes/Films.php';

$keaton = new Acteurs('Keaton', 'Michael', 'Homme', '1951-09-05');
$jack = new Acteurs('Nicholson', 'Jack', 'Homme', '1937-04-22');
$kim = new Acteurs('Basinger', 'Kim', 'Femme', '1953-12-08');

$burton = new Realisateurs('Burton', 'Tim', 'Homme', '1958-08-25');

$batman = new Films('Batman', '1989-09-13', 126, $burton, $keaton);

echo '<h2> '.$batman->get_titre().' '.$batman->get_sortie()->format('Y').' </h2>';

echo '<h4> Acteurs : </h4>';

// echo $keaton.'<br>';

// echo $batman.'<br>';

// echo '<h3>Filmographie de '.$keaton->get_prenom().' '.$keaton->get_nom().'</h3>';
// echo $keaton->Filmographie().'<br>';

// echo '<h3> Films réaliser par '.$alejandro->get_prenom().' '.$alejandro->get_nom().'</h3>';
// echo $alejandro->Realisations();
// // var_dump($keaton);
// // // var_dump($burton);
