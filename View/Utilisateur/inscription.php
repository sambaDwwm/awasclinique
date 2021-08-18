<form method="POST">

    <div class="form-group">
        <label for="email">Email</label>
        <input value="<?= $pseudo ?>" name="eamil" type="text" class="form-control" placeholder="Email">
    </div>

    <div class="form-group">
        <label >Mot de passe</label>
        <input style="max-width:300px" name="motDePasse" type="password" class="form-control" placeholder="Mot de passe">
    </div>

    <div class="form-group">
        <label >Confirmer le mot de passe</label>
        <input name="confirmeMotDePasse" type="password" class="form-control" placeholder="Mot de passe">
    </div>

    <div class="form-group">
        <label >Etes-vous une entreprise ?</label>
        <input name="admin" type="checkbox" <?php if ($admin) echo "checked"; ?>>
    </div>

    <input type="submit" class="btn btn-success" value="Inscription">

</form>