<?php
function getAllLogement () : array {
  $liste_logement[0] =[
    "titre" => "Gare sud",
    "prix" => "445000",
    "image"=> "property-01.jpg",
    "dateCreation" => new DateTime("2017-06-12"),
    "type" => "appartement",
    "taille" => 320,
    "nbChambres" => 2,
    ] ;

    $liste_logement[1] =[
      "titre" => "Guadeloupe",
      "prix" => "345000",
      "image"=> "property-02.jpg",
      "dateCreation" => new DateTime("2017-06-12"),
      "type" => "appartement",
      "taille" => 120,
      "nbChambres" => 2,
      ] ;

      $liste_logement[2] =[
        "titre" => "centre de geriatrie",
        "prix" => "5000",
        "image"=> "property-03.jpg",
        "dateCreation" => new DateTime("2017-06-12"),
        "type" => "appartement",
        "taille" => 12,
        "nbChambres" => 1,
        ] ;
        return $liste_logement;
}
 ?>
