<?php include './view/header.php'; ?>

<main>

    <div class="container">


        <form class="form" method="post" action="modifierUsager/modifier">
        <h1>Modifier un utilisateur</h1>
             <div class="form-element">
                <label>Username</label>
                <select class="input" name="user">
                    <option value="">--- Sélectionnez un utilisateur ---</option>
                    <?php
                    foreach($usager as $row){
                    ?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->username;?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-element">
                <label>Nom</label>
                <input class="input" type="text" name="nom" maxlength="45" required />
            </div>
            <div class="form-element">
                <label>Prenom</label>
                <input class="input" type="text" name="prenom" maxlength="45" required />
            </div>
            <div class="form-element">
                <label>Pays de résidence</label>
                <input class="input" type="text" name="pays_residence" maxlength="45" required />
            </div>
            <div class="form-element">
                <label>privilege</label>
                <select class="input" name="privilege">
                    <option value="">--- Sélectionnez ---</option>
                    <option value="client">client</option>
                    <option value="admin">administrateur</option>
                </select>
            </div>

            <button class="submit" type="submit" >Enregistrer</button>
        </form>
    </div>
<?php include './view/footer.php'; ?>