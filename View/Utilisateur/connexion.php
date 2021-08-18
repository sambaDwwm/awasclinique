<form method="POST">

    <div class="form-group">
        <label for="inputDefault">Pseudo</label>
        <input value="<?= $email ?>" name="email" type="text"  placeholder="email">
    </div>

    <div class="form-group">
        <label class="form-label mt-4">Mot de passe</label>
        <input name="motDePasse" type="password"  placeholder="Mot de passe">
    </div>

    <input  type="submit" class="btn btn-success" value="Connexion">
    <p>
        <a href="<?= config::$baseUrl?>/Utilisateur/inscription">Créer un compte</a>
    </p>
</form>