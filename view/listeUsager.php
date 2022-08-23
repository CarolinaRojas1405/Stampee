<?php include './view/header.php'; ?>

<main>

<div class="liste__timbres">


        <div class="table">
        <h2 class="titre__table">Liste des utilisateurs</h2>
            <table>

                <thead>
                    <tr>
                        <th>Supprimer</th>
                        <th>id</th>
                        <th>Username</th>
                        <th>Nom</th>
                        <th>Premon</th>
                        <th>Privilege</th>
                        <th>Pays de résidence</th>

                    </tr>
                </thead>
                <?php

                    //Affichage des données

                    foreach($userList as $row) {


                ?>

                <tr>
                    <td><a class="icone" href='/encheres/index.php/modifierUsager/delete/<?php echo $row->id;?>'>&#128465;</a></td>
                    <td><?php echo $row->id;?></td>
                    <td><?php echo $row->username;?></td>
                    <td><?php echo $row->nom;?></td>
                    <td><?php echo $row->prenom;?></td>
                    <td><?php echo $row->privilege;?></td>
                    <td><?php echo $row->pays_residence;?></td>


                    <?php
                        }
                    ?>
                </tr>

            </table>

            <div class="center">
                <span>Important ! avant de supprimer un utilisateur il faut vérifier s'il est propriétaire d'un timbre ou s'il participe aux enchères.&nbsp;</span>
            </div>
            <div class="center">
                <span>Utilisateurs avec timbre : &nbsp;</span>
                <?php
                    foreach($userTimbre as $row) {
                ?>
                <span>&nbsp;<?php echo $row->usager_id;?>, &nbsp;</span>
                <?php
                }
                ?>
            </div>

            <div class="center">
            <span>Utilisateurs avec participation aux enchères :&nbsp;</span>
                <?php
                    foreach($userOffre as $row) {

                ?>
                <span>&nbsp;<?php echo $row->id;?>, &nbsp;</span>
                <?php
                }
                ?>
            </div>

        </div>
    </div>

<?php include './view/footer.php'; ?>