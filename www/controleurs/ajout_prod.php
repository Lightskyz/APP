<?php
function addproduct($user){
include ('modele.php');
		
			if(!empty(!empty($_POST['id_categorie']) && !empty($_POST['saison']) && !empty($_POST['dateRecolte']) && !empty($_POST['quantite']) || $_POST['poids'] == $_POST['passe2']){
			$id=$_POST['id'];
			$id_categorie = $_POST['id_categorie'];
			$description = $_POST['description'];
			$quantite = $_POST['quantite'];
			$poids = $_POST['poids'];

			$req = $bdd->prepare('INSERT INTO produit(user, id_categorie, description, quantite, poids) 
			VALUES(:user, :id_categorie, :description, :quantite, :poids)');
			$req->execute (array(
				'user' =>$user
				'id_categorie'=>$id_categorie,
				'description'=>$description,
				'quantite'=>$quantite,
				'poids'=>$poids
				));

$dossier = 'C:\Users\utilisateur\Desktop\APP\www\assets\img\products\ ';
$fichier = basename($_FILES['avatar']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
			
		echo'<p>Votre produit a bien été ajouté</p>';
	}
  include('ajout_produit.php');
}
?>
