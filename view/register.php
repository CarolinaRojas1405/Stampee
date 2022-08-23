<?php include './view/header.php'; ?>

<main>

    <div class="container">

        <form class="form" method="post" action="register/registerUser">
            <h1>Créez votre compte gratuit</h1>
            <span>En créant un compte, vous acceptez nos Conditions d’utilisation et vous approuvez notre Politique de confidentialité. En fonction de la façon dont vous utilisez enchères Stampee, nous pouvons vous envoyer des e-mails promotionnels. Consultez notre Politique de confidentialité pour plus d'informations ou pour vous désabonner.</span>
            <div class="form-element">
                <label>Nom</label>
                <input class="input" type="text" name="nom" maxlength="45" required />
            </div>
            <div class="form-element">
                <label>Prenom</label>
                <input class="input" type="text" name="prenom" maxlength="45" required />
            </div>

            <div class="form-element">
                <label>Adresse e-mail</label>
                <input class="input" type="email" name="email" required />
            </div>
            <div class="form-element">
                <label>Password</label>
                <input class="input" type="password" name="password" required />
            </div>
            <div class="form-element">
                <label>Pays de résidence</label>
                <input class="input" type="text" name="pays_residence" required />
            </div>
            <div class="form-element">
                <label>Catégorie d'utilisateur</label>
                <select class="input" name="privilege">
                    <option value="">--- Sélectionnez la catégorie ---</option>
                    <option value="client">client</option>
                    <!-- <option value="admin">admin</option> -->
                  </select>
            </div>
            <button class="submit" type="submit" >Enregistrer</button>
        </form>
    </div>
<?php include './view/footer.php'; ?>