<?php
  if(isset($_SESSION["user"])) {

?>


<?php include './view/header.php'; ?>

<main>

<!-- banner -->
    <div class="head">
			<section class="banner-top grille">
				<div class="banner__photo">
					<img src="../img/timbre-loupe.jpg" alt="image timbres et loupe">
				</div>

				<div class="banner__text">
					<div class="banner__text-devise">
						<h2 class="banner__titre">Bienvenue sur enchères Lord Stampee</h2>
						<span>Tout ce dont vous avez besoin pour enrichir votre passion de philatéliste !</span>
					</div>
					<a class="bouton" href="home">Découvrez les enchères</a>
				</div>
			</section>
		</div>


<!-- Cartes des enchères pricipales -->
    <div class="grille conteneur-vedettes">

      <section class="vedettes">
        <h2 class="vedettes__entete">Toutes les enchères</h2>
        <ul class="principale__liste">

        <?php

          //Affichage des données

          foreach($listeTimbre as $row) {

            //var_dump($listeTimbre);

        ?>

          <li class="principale__item">
            <div class="favori">
              <span>
                <a href="#"><i class="fas fa-heart"></i></a>
              </span>
            </div>
            <div class="principale__img">
              <a href="/encheres/index.php/placerMise/mise/<?php echo $row->idTimbre;?>"><img src="../img/<?php echo $row->url;?>" alt="timbre US"></a>
            </div>
            <div class="principale__texte">
              <span class="lot">Lot # <?php echo $row->id;?></span>
              <a href="/encheres/index.php/placerMise/mise/<?php echo $row->idTimbre;?>">
                <h3><?php echo $row->nom;?></h3>
                <small>Lot de <?php echo $row->pieces;?> pieces</small>
                <h3>Prix plancher : <?php echo $row->prix_plancher;?> $</h3>
                <h4>Date de début : <?php echo $row->date_debut;?></h4>
              </a>
            </div>
            <div class="details">
              <small class="timer">Fin : <?php echo $row->date_fin;?></small>
              <a class="btn-details" href="/encheres/index.php/placerMise/mise/<?php echo $row->idTimbre;?>">Placer une mise</a>
            </div>
          </li>

          <?php

            }

          ?>

        </ul>

      </section>
    </div>

    <?php include './view/footer.php'; ?>

<?php

} else {

RequirePage::redirect('/encheres/index.php/accueil');

}

?>
