<?php

/* Alexis Monnier 
    28/05/2015
    Version 1.0.0
*/

function addproduct(){
    include("../../modele/modele.php");
        
            if(!empty (!empty($_POST['categorie'])  && (!empty($_POST['quantite']) || !empty($_POST['poids'])) )) {
                $user = $_SESSION['id'];
                $categorie = $_POST['categorie'];
                $description = $_POST['description'];
                if(!empty($_POST['quantite'])){
                    $quantite = $_POST['quantite'];
                    $poids = 0;
                }else{
                    $poids = $_POST['poids'];
                    $quantite = 0;
                }
                $prix = $_POST['prix'];
                $transaction = $_POST['transaction'];

                $sql = 'SELECT id FROM categorie WHERE nom LIKE "%'.$categorie.'%" ';
                $reponse = $bdd ->query($sql);
                while ($donnees = $reponse->fetch())
                    {
                        $id_categorie = $donnees['id'];
                        $sql2 = 'INSERT INTO `produit`(`id_user`, `id_categorie`, `prix`, `quantite`, `poids`, `description`, `transaction` ) VALUES ( :id_user, :id_categorie, :prix, :quantite, :poids, :description, :transaction )';
                $req = $bdd->prepare($sql2);
                
                $req -> bindParam(':id_user' , $user );
                $req -> bindParam(':id_categorie' , $id_categorie );
                $req -> bindParam(':prix' , $prix );
                $req -> bindParam(':quantite' , $quantite );
                $req -> bindParam(':poids' , $poids );
                $req -> bindParam(':description' , $description );
                $req -> bindParam(':transaction' , $transaction );
                $req->execute();
                    }
                
                echo'<p>Votre produit a bien été ajouté</p>';
            }
        }
        

?>




