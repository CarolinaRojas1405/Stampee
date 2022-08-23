<?php include './view/header.php'; ?>

<main>

    <div class="container">


        <form class="form" method="post" action="createEnchere/create">
        <h1>Ajouter un enchère</h1>

        <div class="form-element">
                <label>Timbre</label>
                <select class="input" name="timbre_id">
                    <option value="">--- Sélectionnez un timbre ---</option>
                    <?php
                    foreach($timbre as $row){
                    ?>
                    <option value="<?php echo $row->id;?>"><?php echo $row->nom;?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
             <div class="form-element">
                <label>Date de début</label>
                <input class="input" type="date" name="date_debut" required />
            </div>
            <div class="form-element">
                <label>Date de fin</label>
                <input class="input" type="date" name="date_fin" required />
            </div>
            <div class="form-element">
                <label>Prix de plancher</label>
                <input class="input" type="number" name="prix_plancher" min="1" pattern="^[0-9]+" required />
            </div>
            <div class="form-element">
                <label>Pieces</label>
                <input class="input" type="number" name="pieces" required />
            </div>
            <div class="form-element">
                <label>Archive</label>
                <select class="input" name="archive">
                    <option value="">--- Sélectionnez---</option>
                    <option value="0">Non</option>
                    <option value="1">Oui</option>
                </select>
            </div>

            <button class="submit" type="submit" >Enregistrer</button>
        </form>
    </div>
<?php include './view/footer.php'; ?>