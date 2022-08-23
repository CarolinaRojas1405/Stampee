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

            if($msg) {

        ?>

            <div class="conteneur-central">

                <section class="en-premier">
                <h2 class="en-premier__titre"><?php echo $msg; ?></h2>

            <?php

                }

            ?>
                </section>
            </div>


            <?php

} else {

    RequirePage::redirect('/encheres/index.php/accueil');

}

?>

