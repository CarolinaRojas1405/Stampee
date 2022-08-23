<?php include './view/header.php'; ?>
<main>
    <section class="container">
        <div>
            <form class="form" method="post" action="login/validLogin">
            <h1>C'est bon de vous revoir !</h1>
                <div class="form-element">
                    <label>Adresse e-mail</label>
                    <input class="input" type="email" name="username" maxlength="45" required />
                </div>
                <div class="form-element">
                    <label>Mot de passe</label>
                    <input class="input" type="password" name="password" required />
                </div>
                <button class="submit" type="submit">Se connecter</button>
            </form>
            <div class="buttons">
                <a href="register">Nouvel utilisateur ?</a>
            </div>
        </div>
    </section>

<?php include './view/footer.php'; ?>