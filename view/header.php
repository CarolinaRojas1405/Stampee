<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Carolina Rojas">
    <meta name="description" content="Maquette Catalogue Produit - Portail des enchères">
    <title>Stampee</title>

    <!-- CSS styles -->
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="/css/accueil.css" />
    <link rel="stylesheet" href="css/portail.css" />
    <link rel="stylesheet" href="css/fiche.css" />
    <link rel="stylesheet" href="css/header.css" />


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
          <img class="logo" src="../img/logo.png" alt="logo">
        </a>
      </h1>

      <nav class="nav-central">
        <h2 class="visually-hidden">Navigation principale</h2>

        <ul class="nav-liste">

          <li class="nav-item">
              <a href="/encheres/index.php/accueil">ACCUEIL</a>
          </li>

          <li class="nav-item">
            <a href="/encheres/index.php/portailEncheres">PORTAIL DES ENCHÈRES</a>
          </li>
          <?php
            if(!isset($_SESSION["user"])) {

          ?>

          <li class="nav-item">
              <a href="/encheres/index.php/login">CONTACTEZ-NOUS</a>
          </li>

          <li class="nav-item">
            <div class="section-recherche">
              <div class="section-recherche__wrap">
                <form class="recherche" method="post" action="recherche">
                  <input type="text" class="recherche-term" placeholder="Rechercher timbre par nom" name="recherche">
                  <button type="submit" name="btnRecherche" value="Rechercher" class="recherche-bouton">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
            </div>
          </li>

          <li class="nav-item">
            <a href="/encheres/index.php/login">SE CONNECTER</a>
          </li>

          <?php
            }
            else
            {
              //echo $_SESSION['user'];
          ?>

          <li class="nav-item">
              <a href="/encheres/index.php/home">PLACE UNE MISE</a>
          </li>

          <li class="nav-item">
            <div class="section-recherche">
              <div class="section-recherche__wrap">
                <form class="recherche" method="post" action="recherche">
                  <input type="text" class="recherche-term" placeholder="Rechercher timbre par nom" name="recherche">
                  <button type="submit" name="btnRecherche" value="Rechercher" class="recherche-bouton">
                    <i class="fa fa-search"></i>
                  </button>
                </form>
              </div>
            </div>
          </li>


          <li class="nav-item">
              <span><?php echo $_SESSION['user'];?></span>
          </li>
          <li class="nav-item">
            <a href="/encheres/index.php/logout">DÉCONNEXION</a>
          </li>

          <?php

            }
          ?>

        </ul>
      </nav>

    </div>

  </header>

  <?php
    if(isset($_SESSION["privilege"]) && ($_SESSION['privilege'] == 'admin')) {

  ?>

  <div class="nav-menu blue topBotomBordersOut">
    <a href="/encheres/index.php/listeTimbres">LISTE DE TIMBRES</a>
    <a href="/encheres/index.php/gererTimbre">AJOUTER UN TIMBRE</a>
    <a href="/encheres/index.php/listeUsager">LISTE DES UTILISATEURS</a>
    <a href="/encheres/index.php/modifierUsager">MODIFIER UN UTILISATEUR</a>
    <a href="/encheres/index.php/createEnchere">AJOUTER UNE ENCHÈRE</a>
  </div>
  <?php

}
?>