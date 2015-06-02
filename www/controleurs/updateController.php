<?php
	function updateprofil($user){
		include("../../modele/modele.php");
		if(!empty($_POST['nom'])){
			$nom = $_POST['nom'];
		}
		if(!empty($_POST['prenom'])){
			$prenom = $_POST['prenom'];
		}
		if(!empty($_POST['adresse'])){
			$adresse = $_POST['adresse'];
		}
		if(!empty($_POST['code_postal'])){
			$code_postal = $_POST['code_postal'];	
		}
		if(!empty($_POST['ville'])){
			$ville = $_POST['ville'];
		}
		if(!empty($_POST['telephone'])){
			$telephone = $_POST['telephone'];
		}
		if(!empty($_POST['email'])){
			$email = $_POST['email'];
		}
		if(!empty($_POST['mot_de_passe'])){
			$mot_de_passe = $_POST['mot_de_passe'];
		}
		if(!empty($_POST['mot_de_passe_verif'])){
			$mot_de_passe_verif = $_POST['mot_de_passe_verif'];
		}

			$sql = 'UPDATE `user` SET `nom`=?,`prenom`=?,`adresse`=?, `adresse_verif`=?, `code_postal`=?, `ville`=?, `telephone`=?, `email`=?, `mot_de_passe`=?, `mot_de_passe_verif`=? WHERE id = '.$user.' '; // Ajouter les autres champs de modifications.
			$reponse2= $bdd->prepare($sql);
			$reponse2->bindParam(1, $name);						// Parametre de modification du champ 1
			$reponse2->bindParam(2, $surname);					//									  2 
			$reponse2->bindParam(3, $adress);					//									  3
			$reponse2->bindParam(4, $adress);
			$reponse2->bindParam(5, $cdp);
			$reponse2->bindParam(6, $city);
			$reponse2->bindParam(7, $tel);
			$reponse2->bindParam(8, $mail);	
			$reponse2->bindParam(9, $mdp);
			$reponse2->bindParam(10, $mdp);

			if(!empty($nom)){
				$name = $nom;
			}else{
				$sql2='SELECT nom FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql2);
				while ($donnees = $reponse->fetch())
				{
					$name = $donnees['nom'];
				}
			}
			if(!empty($prenom)){
				$surname = $prenom;
			}else{
				$sql3='SELECT prenom FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql3);
				while ($donnees = $reponse->fetch())
				{
					$surname = $donnees['prenom'];
				}
			}
			if(!empty($adresse)){
				$adress = $adresse;
			}else{
				$sql4='SELECT adresse FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql4);
				while ($donnees = $reponse->fetch())
				{
					$adress = $donnees['adresse'];
				}
			}
			if(!empty($cdp)){
				$code_postal = $cdp;
			}else{
				$sql5='SELECT cdp FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql5);
				while ($donnees = $reponse->fetch())
				{
					$code_postal = $donnees['cdp'];
				}
			}
			if(!empty($vile)){	
				$city = $ville;
			}else{
				$sql6='SELECT ville FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql6);
				while ($donnees = $reponse->fetch())
				{
					$city = $donnees['ville'];
				}
			}
			if(!empty($email)){
				$mail = $email;
			}else{
				$sql7='SELECT email FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql7);
				while ($donnees = $reponse->fetch())
				{
					$mail = $donnees['email'];
				}
			}
			if(!empty($telephone)){
				$tel = $telephone;
			}else{
				$sql8='SELECT telephone FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql8);
				while ($donnees = $reponse->fetch())
				{
					$tel = $donnees['telephone'];
				}
			}
		
			if(!empty($mot_de_passe) && !empty($mot_de_passe_verif)){
				if($mot_de_passe != $mot_de_passe_verif){
					echo "Mot de passe non valide." ;
					$sql9='SELECT mot_de_passe FROM user WHERE id="'.$user.'" ';
					$reponse = $bdd->query($sql9);
					while ($donnees = $reponse->fetch())
					{
						$mdp = $donnees['mot_de_passe'];
					}
				} else {
					$mdp = $mot_de_passe;
				}
			}else{
				$sql9='SELECT mot_de_passe FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql9);
				while ($donnees = $reponse->fetch())
				{
					$mdp = $donnees['mot_de_passe'];
				}
			}
		
		$reponse2->execute();

	}
?>