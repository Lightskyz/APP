<?php 

include('../modele/modele.php');

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

echo'Vous êtes inscrit ! Bievenue ! Veuillez activer votre compte en confirmant votre adresse mail.';

// #Intégration - Partie Dadou - Envoie d'un email

//génération d'une clé aléatoire
  $cle = md5(microtime(TRUE)*100000); 
  
  //insertion de la clé dans la base
  $stmt = $bdd->prepare("UPDATE user SET cle=:cle WHERE email like :email");
  $stmt->bindParam(':cle', $cle);
  $stmt->bindParam(':email', $email);
  $stmt->execute();
  
  //préparation du mail contenant le lien d'activation
  $destinataire = $email;
  $sujet = "Activer votre compte" ;
  $entete = "From: antoine.rakotozafy@gmail.com" ;
  
  //email avec lien d'activation (composé du login(nom) et de la clé(cle)
  $message = 'Bienvenue sur Pear2Pear,
 
  Pour activer votre compte, veuillez cliquer sur le lien ci dessous
  ou copier/coller dans votre navigateur internet.
 
  http://pear2pear.com/validation.php?log='.urlencode($email).'&cle='.urlencode($cle).'
 
 
  ---------------
  Ceci est un mail automatique.
  Merci de ne pas y répondre.';
  
  //envoi du mail//
  mail($destinataire, $sujet, $message, $entete) ;



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