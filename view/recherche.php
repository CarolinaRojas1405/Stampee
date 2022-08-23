<?php include './view/header.php'; ?>

<main>
<?php

    //Affichage des données

    foreach($liste as $row) {

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
        </section>

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
                                <dt class="lot-details__nom">Année du timbre</dt>
                                <dd><?php echo $row->date_creation;?></dd>
                                </div>
                                <div class="lot-details">
                                <dt class="lot-details__nom">Certificat</dt>
                                <dd><?php echo $row->certificat;?></dd>
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
                                <?php
                                    }
                                ?>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?php include './view/footer.php'; ?>