<?php 
//On démarre la session
session_start(); 

//On crée nos variable de session 
$email = $_SESSION["email"];

//On récup dans la BDD
include("modele.php");
$req = $bdd -> prepare ('SELECT * FROM user WHERE email= '.$email.'');
				$req -> execute (array(
					'email'=>$email));
				$resultat = $req->fetch();

//On place dans des variables de session => on demande ensuite la valeur de $_SESSION['isAdmin'] dans la page 'backoffice_controleur.php' afin d'y accéder
$_SESSION['id'] = $resultat['id'];
$_SESSION['nom'] = $resultat['nom'];
$_SESSION['prenom'] = $resultat['prenom'];
$_SESSION['adresse'] = $resultat['adresse'];
$_SESSION['isAdmin'] = $resultat['isAdmin'];

?>