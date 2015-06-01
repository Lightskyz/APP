<?php

/* Alexis Monnier 
    28/05/2015
    Version 1.0.0
*/

function addproduct($user){
    include("../../modele/modele.php");
        
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




