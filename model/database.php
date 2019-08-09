<?php
/**
 * recuperer la liste des logements
 * @return array liste des logements
 */

function getAllLogements():array {
    $liste_logements [0] = [
    "titre" => "gare sud",
    "prix" => 445000,
    "image" => "property-01.jpg",
    "date_creation" => new DateTime("2017-06-12"),
    "type" => "Appartement",
    "taille" => 320,
    "nb_chambres" => 2
];

$liste_logements [1] = [
    "titre" => "Brequigny",
    "prix" => 220000,
    "image" => "property-02.jpg",
    "date_creation" => new DateTime("2017-08-12"),
    "type" => "Maison",
    "taille" => 350,
    "nb_chambres" => 3
];
$liste_logements [2] = [
    "titre" => "Centre",
    "prix" => 360000,
    "image" => "property-03.jpg",
    "date_creation" => new DateTime("2017-05-01"),
    "type" => "Appartement",
    "taille" => 450,
    "nb_chambres" => 4
];
$liste_logements [3] = [
    "titre" => "Campagne",
    "prix" => 200000,
    "image" => "property-04.jpg",
    "date_creation" => new DateTime("2017-09-01"),
    "type" => "Maison",
    "taille" => 320,
    "nb_chambres" => 2
];
  return $liste_logements;  
};

