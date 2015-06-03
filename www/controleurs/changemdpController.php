<?php include("../../modele/modele.php"); ?>

<?php
$mail = $_GET['log'];
// si les champs ne sont pas vides et qu'ils correspondent alors...
if (!empty($_POST['mdp']) && !empty($_POST['mdp2']) && $_POST['mdp'] == $_POST['mdp2']) {
	$mdp = sha1($_POST['mdp']);
//...le mot de passe est modifié dans la bdd et on efface le token de la bdd
     $req = $bdd->prepare("UPDATE user SET mdp =:mdp, token='' WHERE email =:email");
	 $req->bindParam(':mdp', $mdp);
	 $req->bindParam(':email', $mail);
	 $req->execute();

	 
}
//sinon on affiche un message d'erreur et on redirige l'utilisateur sur la page où il doit à nouveau renseigner son mail
//envoyer un message d'erreur avant ?

else {
$req = $bdd->prepare("UPDATE user SET token='' WHERE email =:email");
$req->bindParam(':email', $mail);
$req->execute();
echo 'Les mots de passe ne correspondent pas';
header('location: http://localhost/app/vues/back/envoieMail.php');
	
}


/************************************************************/


?>
