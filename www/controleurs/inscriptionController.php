<?php

include('../modele/modele.php');

if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['mdp2']) && $_POST['mdp'] == $_POST['mdp2'] && !empty($_POST['adresse']) && !empty($_POST['cdp']) && !empty($_POST['ville']) && !empty($_POST['telephone']) && !empty($_POST['email'])) {
 

 // Debut initialisation des variables a rentrer dans la bdd
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $born = $_POST["born"];
  $email = htmlspecialchars($_POST["email"]);
  $mdp = sha1($_POST["mdp"]); // Codage du mdp en sha1 
  $adresse = $_POST["adresse"];
  $cdp = $_POST["cdp"];
  $ville = $_POST["ville"];
  $telephone = $_POST["telephone"];
 // Fin assignation des variable dans la bdd

 // Requete SQL pour ajouter l'ensemble des informations relatif a l'utilisateur dans la bdd.
$sql= 'INSERT INTO user(nom, prenom, born, email, mdp, adresse, cdp, ville, telephone ) VALUES(:nom, :prenom, :born, :email, :mdp, :adresse, :cdp, :ville, :telephone )';
$req = $bdd->prepare($sql);
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
));
 // Fin de la requete SQL
header("Location: /index.php");


// #Intégration - Partie David - Envoie d'un email

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
  $entete = "From: contact@lightskyz.com" ;
  
  //email avec lien d'activation (composé du login(email) et de la clé(cle)
  $message = 'Bienvenue sur Pear2Pear,
 
  Bravo ! Vous êtes maintenant inscrit à notre site, vous pouvez faire votre marché sur la toile avec nos supers vendeurs de proximité !
  RDV sur <a href="http://www.lightskyz.com">Pear2Pear</a>
  
  Enjoy and be fruit !

  L\'équipe de Pear2Pear
 
  ---------------
  Ceci est un mail automatique.
  Merci de ne pas y répondre.';
  
  //envoi du mail
  mail($destinataire, $sujet, $message, $entete) ;



}
elseif(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['born']) || empty($_POST['email']) || empty($_POST['mdp']) || empty($_POST['adresse']) || empty($_POST['cdp']) || empty($_POST['ville']) || empty($_POST['telephone']) ){
	echo '<p>Vous n\'avez pas rempli tous les champs
	Cliquez <a href="../vues/front/signin.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

}
elseif($_POST['mdp'] != $_POST['mdp2']){
		echo '<p>Les mots de passe ne corespondent pas
		Cliquez <a href="../vues/front/signin.php">ici</a> pour revenir</p>
	</div>
	</body>
	</html>';

	}
?>

<!-- http://www.lightskyz.com/vues/back/validation.php?log='.urlencode($email).'&cle='.urlencode($cle).' -->

</html>