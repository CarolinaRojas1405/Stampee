<?php
  if(isset($_SESSION["user"])) {

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carolina Rojas">
    <meta name="description" content="Maquette Catalogue Produit - Portail des enchères">
    <title>Stampee</title>

    <style><?php include 'css/footer.css'; ?></style>
    <style><?php include 'css/accueil.css'; ?></style>
    <style><?php include 'css/portail.css'; ?></style>
    <style><?php include 'css/header.css'; ?></style>
    <style><?php include 'css/fiche.css'; ?></style>


    <!--  Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400&family=Nunito+Sans:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">

    <!--  iconnes -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>
  <header class="entete">

    <div class="conteneur__entete">
      <h1 class="conteneur__logo">
        <a href="#">
          <img class="logo" src="/encheres/img/logo.png" alt="logo">
        </a>
      </h1>
      <nav class="nav-central">
        <h2 class="visually-hidden">Navigation principale</h2>

        <ul class="nav-liste">
          <li class="nav-item">
            <a href="/encheres/index.php/home">TOUTES LES ENCHÈRES</a>
          </li>
        </ul>
      </nav>

    </div>

  </header>

  <main>

<?php

    //Affichage des données

    foreach($ficheTimbre as $row) {

      //var_dump($ficheTimbre);

  ?>
    <!-- Conteneur Principal -->
    <div class="grille lot-details__conteneur-ppal">
      <section class="lot-details__conteneur-ppal">
        <div class="flex lot-details__header">
            <h2 class="lot-details__titre"><?php echo $row->nom;?></h2>
            <div class="favori lot-details__favori">
                <span>
                    <a href="#"><i class="fas fa-heart"></i></a>
                </span>
            </div>
        </div>
        <div class="lot_details__nb">
            <p>Lot <?php echo $row->id;?></p>
        </div>
        <div class="container_image">

          <ul class="slider">
            <li id="slide1">
            <img src="/encheres/img/<?php echo $row->url;?>" alt="<?php echo $row->titre;?>">
            </li>
            <li id="slide2">
              <img src="/encheres/img/<?php echo $row->url;?>" alt="<?php echo $row->titre;?>">
            </li>
            <li id="slide3">
            <img src="/encheres/img/<?php echo $row->url;?>" alt="<?php echo $row->titre;?>">
            </li>
          </ul>

          <ul class="menu">
            <li>
            <a href="#slide2"><img src="/encheres/img/<?php echo $row->url;?>" alt="<?php echo $row->titre;?>"></a>
            </li>
            <li>
              <a href="#slide2"><img src="/encheres/img/<?php echo $row->url;?>" alt="<?php echo $row->titre;?>"></a>
            </li>
              <li>
              <a href="#slide2"><img src="/encheres/img/<?php echo $row->url;?>" alt="<?php echo $row->titre;?>"></a>
            </li>
          </ul>

        </div>

        <div class="lot-details__description">
          <div class="lot-detail__description-wrapper">
            <div class="accordeon">
              <div class="accordeon__section">
                <div class="accordeon__bouton">
                  <header class="accordeon__header">
                    <div class="accordeon__title">
                      <span>Details du lot</span>
                    </div>
                  </header>
                </div>
                <div class="accordeon__content">
                  <dl>
                    <div class="lot-details">
                      <dt class="lot-details__nom">Nom</dt>
                      <dd><?php echo $row->nom;?></dd>
                    </div>
                    <div class="lot-details">
                      <dt class="lot-details__nom">Composition</dt>
                      <dd>Unique</dd>
                    </div>
                    <div class="lot-details">
                      <dt class="lot-details__nom">Pieces</dt>
                      <dd><?php echo $row->pieces;?></dd>
                    </div>
                    <div class="lot-details">
                      <dt class="lot-details__nom">Année du timbre</dt>
                      <dd><?php echo $row->date_creation;?></dd>
                    </div>
                    <div class="lot-details">
                      <dt class="lot-details__nom">Certificat</dt>
                      <dd><?php echo $row->certificat;?></dd>
                    </div>
                    <div class="lot-details">
                      <dt class="lot-details__nom">État</dt>
                      <dd><?php echo $row->condition;?></dd>
                    </div>
                    <div class="lot-details">
                      <dt class="lot-details__nom">Pays d'origine</dt>
                      <dd><?php echo $row->pays_origine;?></dd>
                    </div>
                    <div class="lot-details">
                      <dt class="lot-details__nom">Dimensions</dt>
                      <dd><?php echo $row->dimensions;?></dd>
                    </div>
                    <div class="lot-details">
                      <dt class="lot-details__nom">Couleur</dt>
                      <dd><?php echo $row->couleur;?></dd>
                    </div>
                  </dl>
                </div>

              </div>
              <div class="accordeon__section">
                <div class="accordeon__bouton">
                  <header class="accordeon__header">
                    <div class="accordeon__title">
                      <span>Vendeur</span>
                    </div>
                  </header>
                </div>
                <div class="accordeon__content">
                  <div class="lot-vendeur">
                    <div class="lot-vendeur__content">
                      <div class="lot-vendeur-info lot-vendeur-wrapper flex">
                        <div class="flex">
                          <img class="lot-vendeur__flag" src="/encheres/img/Flags-<?php echo $row->pays_residence;?>-Flag.ico" alt="drapeau pays">
                        </div>
                        <span class="lot-vendeur__nom"><?php echo $row->vendeur;?></span>
                      </div>
                      <div class="lot-vendeur__texte">
                        <p>Membre de Stampee depuis le <?php echo $row->date_register;?></p>
                        <p>120 évaluations (10 au cours des 12 derniers mois)</p>
                      </div>
                    </div>
                    <h3 class="vendeur-heading">
                      <span>Évaluations (12 derniers mois)</span>
                    </h3>
                    <div class="vendeur-score">
                        <p>Score d'évaluation 100%</p>
                    </div>
                    <ol class="vendeur-avis flex">
                      <li class="vendeur-avis__item">
                        <span class="vendeur-avis__nombre">10</span>
                        <div class="vendeur-icone flex">
                          <i class="far fa-smile"></i>
                        </div>
                        <span class="vendeur-avis__title">Positif</span>
                      </li>
                      <li class="vendeur-avis__item">
                        <span class="vendeur-avis__nombre">0</span>
                        <div class="vendeur-icone flex neutre">
                          <i class="far fa-meh"></i>
                        </div>
                        <span class="vendeur-avis__title">Neutre</span>
                      </li>
                      <li class="vendeur-avis__item">
                        <span class="vendeur-avis__nombre">0</span>
                        <div class="vendeur-icone flex negatif">
                          <i class="far fa-frown"></i>
                        </div>
                        <span class="vendeur-avis__title">Negatif</span>
                      </li>

                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- aside -->

        <div class="lot-details__aside">
          <div class="lot-offre-col">
            <div class="lot-offre-col-wrapper enchere">
              <div class="lot-offre-bloc enchere">
                <div class="lot-offre-col__section">
                  <div class="lot-offre-status__wrapper">
                    <div class="lot-offre-status__timer">
                      <strong>Ferme le &nbsp;</strong>
                      <time class="text-tab-figures" datetime="PT15H16M54S"> <?php echo $row->date_fin;?></time>
                    </div>
                  </div>
                </div>

                <div class="lot-offre-col__section">
                  <div class="lot-offre-actuelle border">
                    <div class="lot-offre-actuelle__valeur">
                      <span>Prix plancher <?php echo $row->prix_plancher;?> $CAD</span>
                    </div>
                  </div>
                </div>
                  <div class="lot-offre-col__section">
                    <div class="lot-offre-minimale border">
                      <div class="lot-offre-minimale__contenuer">
                        <div class="lot-offre-minimale-suivante">
                        <?php

                          //Affichage des données

                          foreach($offreSuivante as $value) {

                            $prixSuivant = intval($value->prixMax);
                            $prixPlancher = intval($row->prix_plancher);
                            //var_dump($prixPlancher);

                            if($prixSuivant > $prixPlancher) {
                              $plan = 5;
                              $nextPrix = $prixSuivant + $plan;

                        ?>
                          <div>
                            <span>Offre minimale suivante <?php echo $nextPrix; ?> $CAD</span>
                          </div>

                        <?php

                            } else {

                        ?>
                          <div>
                            <span>Offre minimale suivante <?php echo $prixPlancher; ?> $CAD</span>
                          </div>

                          <?php
                            }
                          }

                          ?>
                          <div class="sivante-min">
                            <span>Les offres n'incluent pas les frais d'enchères.</span>
                          </div>
                        </div>
                        <div class="lot-offre-minimale-suivante-text">
                          <span>Pays d'envoi : <?php echo $row->pays_residence;?></span>
                        </div>
                        <?php

                          }

                        ?>
                        <div class="lot-offre-minimale-suivante-text">
                          <span>Expéditon vers un autre pays : 25 $CAD</span>
                        </div>
                        <div class="lot-offre-minimale-suivante-text">
                          <span>Frais d'enchère : 8% de la l'offre gagnante</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="lot-offre-col__section lot-offre__placer">
                    <div class="offre-rapide">
                      <!-- <div class="lot-offre-bloc__placer">
                        <div>
                          <div class="titre-side">
                            <span>Offre rapide</span>
                          </div>
                          <div class="boutons">
                            <button class="o-bouton bouton__offre-rapide">85 $CAD</button>
                            <button class="o-bouton bouton__offre-rapide">87 $CAD</button>
                            <button class="o-bouton bouton__offre-rapide">89 $CAD</button>
                          </div>
                        </div>
                      </div> -->
                      <div class="lot-offre-bloc__placer">
                        <form method="post" action="/encheres/index.php/placerMise/placer">
                          <span>Faites une offre</span>
                          <div class="flex">
                            <div class="lot-offre-bloc__input">
                              <input class="offre-input"  type="text" name="prix" placeholder=" $CAD">
                              <input class="offre-input"  type="hidden" name="enchere_id" value="<?php echo $row->id;?>">
                              <input class="offre-input"  type="hidden" name="usager_id" value="<?php echo $_SESSION['id'];?>">
                            </div>
                            <button class="lot-offre-bloc__bouton bouton__offre-rapide" type="submit">Placez l'offre</button>
                          </div>
                        </form>
                      </div>

                    </div>
                  </div>
              </div>

                <div class="lot-details-aside">
                  <div class="lot-offre-bloc enchere">
                    <div class="lot-offre-vertical">
                      <div class="titre-side">
                        <span>Acheter en toute sécurité</span>
                      </div>
                      <ul>
                        <li class="acheter-securite flex">
                          <svg class="u-svg u-color-primary u-margin-r-small" viewBox="-4276.35 -752.15 12.837 9.817"><path d="M-4271.82-742.333l-4.529-4.531 1.51-1.51 3.019 3.02 6.8-6.8 1.51 1.51z"></path></svg>
                          <span>Votre paiement sera conservé jusqu'à ce que le vendeur ait envoyé votre article ou qu'il ait préparé pour son retrait sur place</span>

                        </li>
                        <li class="acheter-securite flex">
                          <svg class="u-svg u-color-primary u-margin-r-small" viewBox="-4276.35 -752.15 12.837 9.817"><path d="M-4271.82-742.333l-4.529-4.531 1.51-1.51 3.019 3.02 6.8-6.8 1.51 1.51z"></path></svg>
                          <span>Tous nos ventes sont soumises à contrôle par notaire.</span>
                        </li>
                      </ul>
                    </div>
                    <article class="lot-offre-vertical">
                      <div class="titre-side">
                        <span>Moyens de paiement</span>
                      </div>
                      <p class="acheter-moyens flex">
                        <i class="fab fa-cc-mastercard"></i>
                        <i class="fab fa-cc-visa"></i>
                      </p>
                    </article>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <!-- lots similaires -->

        <!-- <section class="lot-similaire">

          <header class="lot-similaire-entete flex">
            <h2 class="">Lots similaires</h2>
          </header>
          <ul class="principale__liste lot-similaire__liste">

            <li class="principale__item similaires">
              <div class="favori">
                <span>
                  <a href="#"><i class="fas fa-heart"></i></a>
                </span>
              </div>
                <div class="principale__img">
                  <a href="fiche"><img src="img/timbre-006.png" alt="timbre Abu Dhabi"></a>
                </div>
                <div class="principale__texte">
                  <a class="lot" href="#">Lot # 1025</a>
                  <a href="#">
                    <h3>Abu Dhabi - Oman _U.E.A - Collection en cartable</h3>
                    <small>Lot de 20 pieces</small>
                    <h3>Prix plancher : 205 $</h3>
                    <h4>Date de début : 30 mai 2021</h4>
                  </a>
                </div>
                <div class="details">
                  <small class="timer">3h 49m 24s</small>
                  <a class="btn-details" href="#">Détails</a>
                </div>
            </li>

            <li class="principale__item similaires">
              <div class="favori">
                <span>
                  <a href="#"><i class="fas fa-heart"></i></a>
                </span>
              </div>
                <div class="principale__img">
                  <a href="fiche"><img src="img/timbre-belgique.png" alt="timbre Belgique"></a>
                </div>
                <div class="principale__texte">
                  <a class="lot" href="#">Lot # 805</a>
                  <a href="fiche">
                    <h3>Belgique 1915 - King Albert - Inspecté - COB 135/149</h3>
                    <small>Lot de 15 pieces</small>
                    <h3>Prix de vente : 85 $</h3>
                    <h4>Date de début : 28 mai 2021</h4>
                  </a>
                </div>
                <div class="details">
                  <small class="timer">8h 18m 44s</small>
                  <a class="btn-details" href="fiche">Détails</a>
                </div>
            </li>

            <li class="principale__item similaires">
              <div class="favori">
                <span>
                  <a href="fiche"><i class="fas fa-heart"></i></a>
                </span>
              </div>
                <div class="principale__img">
                  <a href="fiche"><img src="img/timbre-canada.png" alt="timbre Canada"></a>
                </div>
                <div class="principale__texte">
                  <a class="lot" href="fiche">Lot # 408</a>
                  <a href="fiche">
                    <h3>Canada 1998 - Les Automatistes - VOH149</h3>
                    <small>Lot de 7 pieces</small>
                    <h3>Prix de vente : 93 $</h3>
                    <h4>Date de début : 01 juin 2021</h4>
                  </a>
                </div>
                <div class="details">
                  <small class="timer">5h 40m 55s</small>
                  <a class="btn-details" href="#">Détails</a>
                </div>
            </li>
            <li class="principale__item similaires">
              <div class="favori">
                  <span>
                    <a href="#"><i class="fas fa-heart"></i></a>
                  </span>
              </div>
                <div class="principale__img">
                  <a href="#"><img src="img/timbre-russie.png" alt="timbre Russie"></a>
                </div>
                <div class="principale__texte">
                  <a class="lot" href="#">Lot # 930</a>
                  <a href="#">
                    <h3>Russie 1889 - Emblème national - RSQ895/950</h3>
                    <small>Lot de 8 pieces</small>
                    <h3>Prix de vente : 115 $</h3>
                  </a>
                  <h4>Date de début : 29 mai 2021</h4>
                </div>
                <div class="details">
                  <small class="timer">10h 29m 35s</small>
                  <a class="btn-details" href="#">Détails</a>
                </div>
            </li>

            <li class="principale__item similaires">
              <div class="favori">
                <span>
                  <a href="#"><i class="fas fa-heart"></i></a>
                </span>
              </div>
                <div class="principale__img">
                  <a href="/fiche.html"><img src="img/timbre-belgique.png" alt="tiembre Belgique"></a>
                </div>
                <div class="principale__texte">
                  <a class="lot" href="#">Lot # 805</a>
                  <a href="#">
                    <h3>Belgique 1915 - King Albert - Inspecté - COB 135/149</h3>
                    <small>Lot de 15 pieces</small>
                    <h3>Prix de vente : 85 $</h3>
                    <h4>Date de début : 28 mai 2021</h4>
                  </a>
                </div>
                <div class="details">
                  <small class="timer">8h 18m 44s</small>
                  <a class="btn-details" href="#">Détails</a>
                </div>
            </li>
          </ul>

        </section> -->
    </div>

    <?php include './view/footer.php'; ?>

<?php

  } else {

    RequirePage::redirect('/encheres/index.php/accueil');

  }

?>