<?php
include("../../modele/modele.php");
$subject = 'Test';
$headers = 'From: contact@lightskyz.com';
$erreur = 'Cet email est inconnu de notre base de données.Veuillez réessayer';
$erreur1 = 'Vous n\'avez pas rempli le champ';
//on vérifie si le champ n'est pas vide
if (!empty($_POST['email'])){
$req = $bdd->prepare('SELECT id, email FROM user WHERE email = :email');
$req->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
        $req->execute();
        $data=$req->fetch();
//si l'email entré n'existe pas dans la bdd on affiche un message d'erreur
 if($data['email'] != $_POST['email']) {
echo $erreur;
echo'Veuillez cliquer <a href="../back/envoieMail.php">ici</a>';

 }

 else{
	 echo'Un lien vous a été envoyé par mail';
	 $email = $_POST['email'];
	 //on génère un jeton aléatoire unique
     $token = uniqid(rand(), true);
	 //on remplie la colonne 'token' de la table user avec ce jeton
	 $req = $bdd->prepare('UPDATE user SET token =:token WHERE email = :email');
	 $req->bindParam(':token', $token);
	 $req->bindParam(':email', $email);
	 $req->execute();
	
	   $message = 'Bienvenue sur Pear2Pear,
 
  Pour activer votre compte, veuillez cliquer sur le lien ci dessous
  ou copier/coller dans votre navigateur internet.
 
<!-- je n\'ai pas ce fichier, que faut-il mettre dedans ? -->

 http://localhost/app/mdp/validation.php?log='.urlencode($email).'&token='.urlencode($token).'
  ---------------
  Ceci est un mail automatique.
  Merci de ne pas y répondre.';
  //on envoie l'url de changement de mot de passe avec comme variable à l'intérieur de l'url  l'email de l'utilisateur ainsi que le token
   mail($email, $subject, $message, $headers);
   }
}
//si le champ est vide on envoie un message d'erreur
else {
	echo $erreur1;
	echo '<br>Cliquer <a href="../back/envoieMail.php">ici</a> pour réessayer</br>';
	
}


 
?>