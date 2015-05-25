<!DOCTYPE HTML>
<html>
	
	<head>
		<title>Annonce - Pear2Pear</title>
		<?php include("head.php"); ?>
		
	</head>


<?php include('../modele/modele.php');?>

<?php

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['passe']) && !empty($_POST['passe2']) && $_POST['passe'] == $_POST['passe2']){
  $nom     = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $email     = htmlspecialchars($_POST["email"]);
  $born = $_POST["born"];
  $passe      = sha1($_POST["passe"]);
$req = $bdd->prepare('INSERT INTO user(nom, prenom, email, passe, born) VALUES(:nom, :prenom, :email, :passe, :born)');
$req->execute(array(
'nom' => $nom,
'prenom' => $prenom,
'email' => $email,
'passe' => $passe,
'born' => $born
));

echo'<p>Vous êtes inscrit</p>';

}
elseif(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['passe'])){
	echo '<p>Vous n\'avez pas rempli tous les champs
	Cliquez <a href="../vues/login.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

}
elseif($_POST['passe'] != $_POST['passe2']){
		echo '<p>Les mots de passe ne corespondent pas
		Cliquez <a href="../vues/login.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

	}
?>


</html>