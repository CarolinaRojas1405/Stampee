<?php include './view/header.php'; ?>

  <main>

    <div class="conteneur-central grille">
      <section class="en-premier">
        <h2 class="en-premier__titre">Coup de coeur du Lord Stampee</h2>
        <ul class="en-premier__liste">

          <li class="en-premier__item">
              <div class="en-premier__img">
                <a href="#"><img src="../img/lote-timbre-001.png" alt="lote timbre Autriche"></a>
              </div>
              <div class="en-premier__texte">
                <a href="#">
                  <h3>Enchère Autriche</h3>
                </a>
                <small>Fin : 16 mai 2021 | 14:00</small>
              </div>
          </li>

          <li class="en-premier__item">
              <div class="en-premier__img">
                <a href="#"><img src="../img/timbre-belgique.png" alt="timbre Belgique"></a>
              </div>
              <div class="en-premier__texte">
                <a href="#">
                  <h3>Enchère Belgique</h3>
                </a>
                <small>Fin : 17 mai 2021 | 08:00</small>
              </div>
          </li>

          <li class="en-premier__item">
              <div class="en-premier__img">
                <a href="#"><img src="../img/timbre-006.png" alt="timbres Émirats Arabes Unis"></a>
              </div>
              <div class="en-premier__texte">
                <a href="#">
                  <h3>Enchère Émirats Arabes Unis</h3>
                </a>
                <small>Fin : 16 mai 2021 | 09:00</small>
              </div>
          </li>

          <li class="en-premier__item">
            <div class="en-premier_img">
              <a href="#"><img src="../img/timbre-russie.png" alt="timbres Russie"></a>
            </div>
            <div class="en-premier__texte">
              <a href="#">
                <h3>Enchère Russie</h3>
              </a>
              <small>Fin : 14 mai 2021 | 10:00</small>
            </div>
          </li>

          <li class="en-premier__item">
            <div class="en-premier__img">
              <a href="#"><img src="../img/timbre-france.png" alt="timbre France"></a>
            </div>
            <div class="en-premier__texte">
              <a href="#">
                <h3>Enchère France</h3>
              </a>
              <small>Fin : 18 mai 2021 | 22:00</small>
            </div>
          </li>

          <li class="en-premier__item">
            <div class="en-premier__img">
              <a href="#"><img src="../img/timbre-canada.png" alt="timbre Canada"></a>
            </div>
            <div class="en-premier__texte">
              <a href="#">
                <h3>Enchère Canada</h3>
              </a>
              <small>Fin : 16 mai 2021 | 14:00</small>
            </div>
          </li>

          <li class="en-premier__item">
            <div class="en-premier__img">
              <a href="#"><img src="../img/timbre-italy.png" alt="timbre Italie"></a>
            </div>
            <div class="en-premier__texte">
              <a href="#">
                <h3>Enchère Italie</h3>
              </a>
              <small>Fin : 22 mai 2021 | 08:00</small>
            </div>
          </li>

          <li class="en-premier__item">
            <div class="en-premier__img">
              <a href="#"><img src="../img/timbre-angleterre.png" alt="timbre Angleterre"></a>
            </div>
            <div class="en-premier__texte">
              <a href="#">
                <h3>Enchère Angleterre</h3>
              </a>
              <small>Fin : 17 mai 2021 | 17:00</small>
            </div>
        </li>
        </ul>
      </section>

      <!-- Navigation à gauche -->

      <section class="nav-gauche">
        <div class="nav-gauche__conteneur">
          <div class="nav-gauche__liste">
            <div>
              <h3 class="nav-gauche__liste-titre">État</h3>
            </div>
            <ul class="nav-gauche__liste-volet">
            <form method="post" action="/encheres/index.php/portailEncheres/">
              <li>
                <div>
                  <input id="neuf" value="neuf" type="checkbox">
                  <label for="neuf">
                    <a href="#">
                      <span>Neuf</span>
                    </a>
                  </label>
                </div>
              </li>
              <li>
                <div>
                    <input id="occasion" value="occasion" type="checkbox">
                    <label for="occasion">
                      <a href="#">
                        <span>D'occasion</span>
                      </a>
                    </label>
                </div>
              </li>
              <li>
                <div>
                    <input id="sansgomme" value="sansgomme" type="checkbox">
                    <label for="sansgomme">
                      <a href="#">
                        <span>Neuf sans gomme</span>
                      </a>
                    </label>
                  </div>
              </li>
              <li>
                <div>
                    <input id="gommeoriginale" value="gommeoriginale" type="checkbox">
                    <label for="gommeoriginale">
                      <a href="#">
                        <span>Gomme originale</span>
                      </a>
                    </label>
                </div>
              </li>
              <button type="submit" >Appliquer</button>
            </form>
            </ul>
          </div>
          <div class="nav-gauche__liste">
            <div>
              <h3 class="nav-gauche__liste-titre">Prix</h3>
            </div>
            <ul class="nav-gauche__liste-volet">
              <li>
                <div>
                  <input id="moinsde10" type="checkbox">
                  <label for="moinsde10">
                    <a href="#">
                      <span>Moins de 10 $</span>
                    </a>
                  </label>
                </div>
              </li>
              <li>
                <div>
                  <input id="entre10et19" type="checkbox">
                  <label for="entre10et19">
                    <a href="#">
                      <span>Entre 10 $ et 19 $</span>
                    </a>
                  </label>
                </div>
              </li>
              <li>
                <div>
                  <input id="plusde20" type="checkbox">
                  <label for="plusde20">
                    <a href="#">
                      <span>Plus de 20 $</span>
                    </a>
                  </label>
                </div>
              </li>
              <li>
                <div>
                  <div class="prix-min-max">
                    <div class="min-valeur">
                      <label for="minvaleur"></label>
                      <input id="minvaleur" type="text" size="6">
                    </div>
                    <span class="millieu">
                      <span> $</span><span>-</span>
                    </span>
                    <div class="max-valeur">
                      <label for="maxvaleur"></label>
                      <input id="maxvaleur" type="text" size="6">
                    </div>
                    <span class="millieu">
                      <span> $</span>
                    </span>
                    <span class="millieu">
                      <a href="/encheres/index.php/portailEncheres"><i class="fas fa-angle-right"></i>
                      </a>
                    </span>
                  </div>
                </div>
              </li>
              <button type="submit" >Appliquer</button>
            </ul>
          </div>
          <div class="nav-gauche__liste">
            <div>
              <h3 class="nav-gauche__liste-titre">Timbres par pays</h3>

            </div>
            <ul class="nav-gauche__liste-volet">
              <li>
                <div>
                  <input id="allemagne" type="checkbox">
                  <label for="allemagne">
                    <a href="#">
                      <span>Allemagne</span>
                    </a>
                  </label>
                </div>
              </li>
              <li>
                <div>
                  <input id="autriche" type="checkbox">
                  <label for="autriche">
                    <a href="#">
                      <span>Autriche</span>
                    </a>
                  </label>
                  </div>
              </li>
              <li>
                <div>
                  <input id="chine" type="checkbox">
                  <label for="chine">
                    <a href="#">
                      <span>Chine</span>
                    </a>
                  </label>
                  </div>
              </li>
              <li>
                <div>
                  <input id="espagne" type="checkbox">
                  <label for="espagne">
                    <a href="#">
                      <span>Espagne</span>
                    </a>
                  </label>
                  </div>
              </li>
              <li>
                <div>
                  <input id="france" type="checkbox">
                  <label for="france">
                    <a href="#">
                      <span>France</span>
                    </a>
                  </label>
                  </div>
              </li>
              <li>
                <div>
                  <input id="grandeBretagne" type="checkbox">
                  <label for="grandeBretagne">
                    <a href="#">
                      <span>Grande-Bretagne</span>
                    </a>
                  </label>
                  </div>
              </li>
              <li>
                <div>
                  <input id="portugal" type="checkbox">
                  <label for="portugal">
                    <a href="#">
                      <span>Portugal</span>
                    </a>
                  </label>
                  </div>
              </li>
              <li>
                <div>
                  <input id="russie" type="checkbox">
                  <label for="russie">
                    <a href="#">
                      <span>Russie</span>
                    </a>
                  </label>
                </div>
              </li>
              <button type="submit" >Appliquer</button>
            </ul>
          </div>
        </div>
      </section>


      <!-- Cartes des enchères pricipales -->

      <section class="principale">
        <h2 class="principale__titre">Les enchères</h2>
        <ul class="principale__liste">

        <?php

          //Affichage des données

          foreach($listeTimbre as $row) {

            //var_dump($listeTimbre);

        ?>

          <li class="principale__item">
            <div class="favori">
              <span>
                <a href="/encheres/index.php/fiche/ficheTimbre/<?php echo $row->idTimbre;?>"><i class="fas fa-heart"></i></a>
              </span>
            </div>
            <div class="principale__img">
              <a href="/encheres/index.php/fiche/ficheTimbre/<?php echo $row->idTimbre;?>"><img src="../img/<?php echo $row->url;?>" alt="timbre US"></a>
            </div>
            <div class="principale__texte">
              <span class="lot">Lot # <?php echo $row->id;?></span>
              <a href="/encheres/index.php/fiche/ficheTimbre/<?php echo $row->idTimbre;?>">
                <h3><?php echo $row->nom;?></h3>
                <small>Lot de <?php echo $row->pieces;?> pieces</small>
                <h3>Prix plancher : <?php echo $row->prix_plancher;?> $</h3>
                <h4>Date de début : <?php echo $row->date_debut;?></h4>
              </a>
            </div>
            <div class="details">
              <small class="timer">Fin : <?php echo $row->date_fin;?></small>
              <a class="btn-details" href="/encheres/index.php/fiche/ficheTimbre/<?php echo $row->idTimbre;?>">Détails</a>
            </div>
          </li>

          <?php

            }

          ?>

        </ul>
        <div class="btn btn_rouge">
          <a href="#">
            Tous
          </a>
        </div>

      </section>
    </div>

    <?php include './view/footer.php'; ?>
