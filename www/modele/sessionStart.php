<?php 
//On démarre la session
session_start(); 

//On crée nos variable de session 
$email = $_SESSION["email"];
$mdp = $_SESSION["mdp"];

//On récup dans la BDD
$req = $bdd -> prepare ('SELECT id, isAdmin, adresse, nom, prenom FROM user WHERE email= '.$email.', passe= '.$mdp.' ');
				$req -> execute (array(
					'nom'=>$nom,
					'id'=>$id,
					'isAdmin'=>$isAdmin,
					'adresse'=>$adresse,
					'prenom'=>$prenom
					));

//On place dans des variables de session => on demande ensuite la valeur de $_SESSION['isAdmin'] dans la page 'backoffice_controleur.php' afin d'y accéder
$_SESSION['id'] = $id;
$_SESSION['nom'] = $nom;
$_SESSION['prenom'] = $prenom;
$_SESSION['adresse'] = $adresse;
$_SESSION['isAdmin'] = $isAdmin;

?>

