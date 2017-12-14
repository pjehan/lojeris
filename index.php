<?php
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


 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Lojeris</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header class="site-header">
        <div class="cta-header">
            <div class="container">
                <ul class="cta-contact inline-list">
                    <li>Téléphone : <a href="tel:0123456789">0123456789</a></li>
                    <li>Email : <a href="mailto:contact@lojeris.fr">contact@lojeris.fr</a></li>
                </ul>
                <div class="cta-social">
                    <ul class="inline-list">
                        <li>
                            <a href="http://www.facebook.com">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.twitter.com">
                                <span class="fa-stack fa-lg">
                                  <i class="fa fa-circle fa-stack-2x"></i>
                                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container main-header">
            <a href="index.html" class="logo">
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-home fa-stack-1x fa-inverse"></i>
                </span>
            </a>
            <nav class="main-nav">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Notre Agence</a></li>
                    <li><a href="#">Biens Immobiliers</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <header class="home-banner">
            <h1>Bienvenue chez <strong>Lojeris</strong></h1>
            <p>Votre partenaire de confiance en immobilier</p>
        </header>

        <section class="container">
            <h2>Nos dernières offres</h2>
            <div class="properties">
              <?php foreach ($liste_logement as $logement) : ?>
                <article class="property">
                    <a href="#">
                        <img src="images/<?php echo $logement["image"];?>" alt="$liste_logement[0]["titre"]">
                        <footer class="overlay">
                            <div class="info">
                                <div class="tag <?php echo ($logement[0]["prix"] < 200000) ? "reduc" : ""; ?> ">
                                  <?php echo $logement["prix"]; ?> €</div>
                                <h3><?php echo $logement["titre"];?></h3>
                            </div>
                            <div class="more-info">
                                <div class="property-info">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo $logement["dateCreation"]->format("d/m/Y");?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-tag"></i>
                                    <?php echo $logement["type"];?>
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-expand"></i>
                                      <?php echo $logement["taille"];?> m2
                                </div>
                                <div class="property-info">
                                    <i class="fa fa-bed"></i>
                                    <?php echo $logement["nbChambres"]?>
                                </div>
                            </div>
                        </footer>
                    </a>
                </article>
              <?php endforeach; ?>


            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            Copyright © 2013 Lojeris
        </div>
    </footer>

</body>
</html>
