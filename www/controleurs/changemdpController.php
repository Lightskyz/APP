<?php include("../../modele/modele.php"); ?>

<?php
function updatepassword($email){
 
echo $email;
// si les champs ne sont pas vides et qu'ils correspondent alors...
if (!empty($_POST['mdp'])){
	$mdp = $_POST['mdp'];
	echo $mdp;
}
if (!empty($_POST['mdp2'])){
	$mdp2 = $_POST['mdp2'];
	echo $mdp2;
}

//...le mot de passe est modifié dans la bdd et on efface le token de la bdd


     $sql ='UPDATE `user` SET `mdp`=?, `token`=?, WHERE email ='.$email.'';
     echo 'req ok';
     $reponse= $bdd->prepare($sql);
	 $reponse->bindParam(1, $pass);
	 echo 'bindParam mdp ok';



	 if (!empty($mdp) && !empty($mdp2)){
	 	if ($mdp != $mdp2){
	 		echo"Les mots de passe ne correspondent pas";
	 		header('location: http://www.lightskyz.com/vues/back/changementMdp.php');
	 		$sql9='SELECT mdp FROM user WHERE email="'.$email.'" ';
					$reponse = $bdd->query($sql9);
					while ($donnees = $reponse->fetch())
					{
						$pass = sha1($donnees['mdp']);
					}
				} else {
					$pass = sha1($mdp);
				}
			}else{
				$sql9='SELECT mdp FROM user WHERE email="'.$email.'" ';
				$reponse = $bdd->query($sql9);
				while ($donnees = $reponse->fetch())
				{
					$pass = sha1($donnees['mdp']);
				}
			}

	 		$reponse->execute();
	 		echo 'success';

	 
}
//sinon on affiche un message d'erreur et on redirige l'utilisateur sur la page où il doit à nouveau renseigner son mail
//envoyer un message d'erreur avant ?

//else {
/* $req = $bdd->prepare("UPDATE user SET token='' WHERE email =:email");
$req->bindParam(':email', $email);
$req->execute(); */
echo 'Les mots de passe ne correspondent pas';

	
//}


/************************************************************/


?>
