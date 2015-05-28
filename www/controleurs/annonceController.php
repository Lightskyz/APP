<?php

/* Alexis Monnier 
    28/05/2015
    Version 1.0.0
*/

function addproduct($user){
    include("../modele/modele.php");
        
            if(!empty (!empty($_POST['categorie'])  && (!empty($_POST['quantite']) || !empty($_POST['poids'])) )) {

                $categorie = $_POST['categorie'];
                $description = $_POST['description'];
                $quantite = $_POST['quantite'];
                $prix = $_POST['prix'];
                $poids = $_POST['poids'];
               
                $sql = 'SELECT id FROM categorie WHERE nom LIKE "%'.$categorie.'%" ';
                $reponse = $bdd ->query($sql);
                while ($donnees = $reponse->fetch())
                    {
                        $id_categorie = $donnees['id'];
                    }
                
                $sql2 = 'INSERT INTO produit(id_user, id_categorie, prix, quantite, poids, description, date_publication) 
                    VALUES ( :id_user, :id_categorie, :prix, :quantite, :poids, :description, CURDATE() )';
                $req = $bdd->prepare($sql2);
                
                $req -> bindParam(':id_user' , $user );
                $req -> bindParam(':id_categorie' , $id_categorie );
                $req -> bindParam(':prix' , $prix );
                $req -> bindParam(':quantite' , $quantite );
                $req -> bindParam(':poids' , $poids );
                $req -> bindParam(':description' , $description );
                $req->execute();

                //ajout_image();
                echo'<p>Votre produit a bien été ajouté</p>';
            }
  
        }

?>

<?php 

/* Inutile ici car un produit n'a pas d'image pas comme les catégories et les utilisateurs 

function ajout_image(){
    $dossier = '../www/assets/img/products';
    $fichier = basename($_FILES['avatar']['name']);
    $taille_maxi = 100000;
    $taille = filesize($_FILES['avatar']['tmp_name']);
    $extensions = array('.png', '.gif', '.jpg', '.jpeg');
    $extension = strrchr($_FILES['avatar']['name'], '.');//Début des vérifications de sécurité..
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
        } else //Sinon (la fonction renvoie FALSE).
        {
            echo 'Echec de l\'upload !';
        }
    } else
    {
         echo $erreur;
    }
}
?>

*/

