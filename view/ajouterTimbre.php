<?php include './view/header.php'; ?>

<main>

    <div class="container">


        <form class="form" method="post" action="gererTimbre/ajouter">
        <h1>Ajouter un timbre</h1>
             <div class="form-element">
                <label>Nom</label>
                <input class="input" type="text" name="nom" maxlength="150" required />
            </div>
            <div class="form-element">
                <label>date de creation</label>
                <input class="input" type="number" name="date_creation" maxlength="4" required />
            </div>
            <div class="form-element">
                <label>Pays d'origine</label>
                <input class="input" type="text" name="pays_origine" maxlength="45" required />
            </div>
            <div class="form-element">
                <label>Couleur</label>
                <input class="input" type="text" name="couleur" maxlength="45" required />
            </div>
            <div class="form-element">
                <label>Dimensions</label>
                <input class="input" type="text" name="dimensions" maxlength="45" required />
            </div>
            <div class="form-element">
                <label>Certificat</label>
                <input class="input" type="text" name="certificat" maxlength="45" required />
            </div>
            <div class="form-element">
                <label>État du timbre</label>
                <select class="input" name="condition_id">
                    <option value="">--- Sélectionnez l'état du timbre ---</option>
                    <?php
                    foreach($condition as $row){
                    ?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->condition;?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <div class="form-element">
                <label>Url Image</label>
                <input class="input" type="texte" name="url" required />
            </div>
            <div class="form-element">
                <label>Titre de l'image</label>
                <input class="input" type="texte" name="titre" required />
            </div>
            <div class="form-element">
                <label>Image principale</label>
                <select class="input" name="image_principale">
                    <option value="">--- Sélectionnez---</option>
                    <option value="1">Oui</option>
                    <option value="0">Non</option>
                </select>
            </div>
            <div class="form-element">
                <label>Vendeur</label>
                <select class="input" name="usager_id">
                <option value="">--- Sélectionnez le vendeur ---</option>
                    <?php
                        foreach($vendeur as $row){
                    ?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->prenom;?> <?php echo $row->nom;?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <button class="submit" type="submit" >Enregistrer</button>
        </form>
    </div>
<?php include './view/footer.php'; ?>