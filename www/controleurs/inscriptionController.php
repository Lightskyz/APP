<!DOCTYPE HTML>
<html>
	
	<head>
		<title>Annonce - Pear2Pear</title>
		<?php include("head.php"); ?>
		
	</head>


<?php include('../modele/modele.php');?>

<?php

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['mdp2']) && $_POST['mdp'] == $_POST['mdp2'] && !empty($_POST['adresse']) && !empty($_POST['cdp']) && !empty($_POST['ville']) && !empty($_POST['telephone']) && !empty($_POST['email'])) {
  $nom     = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $born = $_POST["born"];
  $email     = htmlspecialchars($_POST["email"]);
  $mdp      = sha1($_POST["mdp"]);
  $adresse = $_POST["adresse"];
  $cdp = $_POST["cdp"];
  $ville = $_POST["ville"];
  $telephone = $_POST["telephone"];
  $image = $_POST["image"];



//Finir le formulaire complet d'inscription

$req = $bdd->prepare('INSERT INTO user(nom, prenom, born, email, mdp, adresse, cdp, ville, telephone, image ) VALUES(:nom, :prenom, :born, :email, :mdp, :adresse, :cdp, :ville, :telephone, :image)');
$req->execute(array(
'nom' => $nom,
'prenom' => $prenom,
'born' => $born,
'email' => $email,
'mdp' => $mdp,
'adresse' => $adresse,
'cdp' => $cdp,
'ville' => $ville,
'telephone' => $telephone,
'image' => $image

));

echo'<p>Vous êtes inscrit</p>';

}
elseif(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['born']) || empty($_POST['email']) || empty($_POST['mdp']) || empty($_POST['adresse']) || empty($_POST['cdp']) || empty($_POST['ville']) || empty($_POST['telephone']) ){
	echo '<p>Vous n\'avez pas rempli tous les champs
	Cliquez <a href="../vues/login.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

}
elseif($_POST['mdp'] != $_POST['mdp2']){
		echo '<p>Les mots de passe ne corespondent pas
		Cliquez <a href="../vues/login.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

	}
?>


</html>