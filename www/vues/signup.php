<div id="form_signup">
	<form method="post" action="../controleurs/connexionController.php">
        <fieldset>
        <legend>Connexion</legend>
    <p>
        <label> Email: <input type="text" name="nom"/></label><br /><br />
        <label> Mot de passe: <input type="password" name="passe"/></label><br />
    </p>
        </fieldset>
    <p><input type="submit" value="Se connecter" /></p>
	   <?php include("../controleurs/connexionController.php"); ?>
    </form>
</div>