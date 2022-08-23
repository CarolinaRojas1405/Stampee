<?php include './view/header.php'; ?>

<main>

<div class="liste__timbres">

        <div class="table">
        <h2 class="titre__table">Liste de timbres</h2>
            <table>

                <thead>
                    <tr>
                    <th>Supprimer le timbre</th>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Date de creation</th>
                    <th>Pays d'origine</th>
                    <th>Couleur</th>
                    <th>Dimensions</th>
                    <th>certificat</th>
                    <th>Modifier le timbre</th>
                    </tr>
                </thead>
                <?php

                    //Affichage des données

                    foreach($liste as $row) {

                    //var_dump($listeTimbre);

                ?>

                <tr>
                    <td><a class="icone" href='/encheres/index.php/gererTimbre/delete/<?php echo $row->id;?>'>&#128465;</a></td>
                    <td><?php echo $row->id;?></td>
                    <td><?php echo $row->nom;?></td>
                    <td><?php echo $row->date_creation;?></td>
                    <td><?php echo $row->pays_origine;?></td>
                    <td><?php echo $row->couleur;?></td>
                    <td><?php echo $row->dimensions;?></td>
                    <td><?php echo $row->certificat;?></td>
                    <td><a href='/encheres/index.php/modifierTimbre/modifier/<?php echo $row->id;?>'>Modifier</a></td>

                    <?php
                        }
                    ?>
                </tr>

            </table>
            <div class="center">
                <span>Important ! Les timbres suivant ne peuvent pas être supprimés parce qu'ils sont liés à une enchère :&nbsp;</span>
                    <?php
                        foreach($listeEncheres as $row) {
                    ?>
                <span>&nbsp;<?php echo $row->timbre_id;?>, &nbsp;</span>
                    <?php
                    }
                    ?>
            </div>
        </div>
    </div>

<?php include './view/footer.php'; ?>