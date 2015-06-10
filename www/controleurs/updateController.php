<?php

/*
	Payraudeau Maxime
*/
function updateprofil($user){		// Fonction pour update le profif

		include("../../modele/modele.php");

		if(!empty($_POST['nom'])){			// Pour chaque champ non vide du formulaire, on assigne une variable 
			$nom = $_POST['nom'];
		}
		if(!empty($_POST['prenom'])){
			$prenom = $_POST['prenom'];
		}
		if(!empty($_POST['born'])){
			$born = $_POST['born'];
		}
		if(!empty($_POST['email'])){
			$email = $_POST['email'];
		}
		if(!empty($_POST['mdp'])){
			$mdp = $_POST['mdp'];
		}
		if(!empty($_POST['adresse'])){
			$adresse = $_POST['adresse'];
		}
		if(!empty($_POST['cdp'])){
			$cdp = $_POST['cdp'];	
		}
		if(!empty($_POST['ville'])){
			$ville = $_POST['ville'];
		}
		if(!empty($_POST['telephone'])){
			$telephone = $_POST['telephone'];
		}
		if(!empty($_POST['mdp2'])){
			$mdp2 = $_POST['mdp2'];
		}

			$sql = 'UPDATE `user` SET `nom`=?,`prenom`=?,`born`=?, `email`=?, `mdp`=?, `adresse`=?, `cdp`=?, `ville`=?, `telephone`=? WHERE id = '.$user.' '; 
			$reponse2= $bdd->prepare($sql);
			$reponse2->bindParam(1, $lastname);						// Parametre de modification du champ 1
			$reponse2->bindParam(2, $firstname);					//									  2 
			$reponse2->bindParam(3, $datebirth);					//									  3
			$reponse2->bindParam(4, $mail);
			$reponse2->bindParam(5, $pass);
			$reponse2->bindParam(6, $adress);
			$reponse2->bindParam(7, $codepostal);
			$reponse2->bindParam(8, $city);
			$reponse2->bindParam(9, $phone);

// Nous avons dissocier chaque variable pour que l'on puisse independament changer les infos sans modifier les autres dans la bdd
			
			if(!empty($nom)){											// Pour l'ensemble des variables, on regarde si la variable du formulaire est vide ou non, si elle n'est pas vide
				$lastname = $nom;										// alors on assigne cette variable a la variable relatif a l'update
			}else{														// si elle est vide, alors on assigne a cette variable la valeur deja existante dans la base de donnee
				$sql2='SELECT nom FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql2);
				while ($donnees = $reponse->fetch())
				{
					$lastname = $donnees['nom'];
				}
			}
			if(!empty($prenom)){
				$firstname = $prenom;
			}else{
				$sql3='SELECT prenom FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql3);
				while ($donnees = $reponse->fetch())
				{
					$firstname = $donnees['prenom'];
				}
			}
			if(!empty($born)){
				$datebirth = $born;
			}else{
				$sql4='SELECT born FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql4);
				while ($donnees = $reponse->fetch())
				{
					$datebirth = $donnees['born'];
				}
			}
			if(!empty($email)){
				$mail = $email;
			}else{
				$sql5='SELECT email FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql5);
				while ($donnees = $reponse->fetch())
				{
					$mail = $donnees['email'];
				}
			}
			if(!empty($adresse)){	
				$adress = $adresse;
			}else{
				$sql6='SELECT adresse FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql6);
				while ($donnees = $reponse->fetch())
				{
					$adress = $donnees['adresse'];
				}
			}
			if(!empty($cdp)){
				$codepostal = $cdp;
			}else{
				$sql7='SELECT cdp FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql7);
				while ($donnees = $reponse->fetch())
				{
					$codepostal = $donnees['cdp'];
				}
			}
			if(!empty($ville)){
				$city = $ville;
			}else{
				$sql9='SELECT ville FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql9);
				while ($donnees = $reponse->fetch())
				{
					$city = $donnees['ville'];
				}
			}
			if(!empty($telephone)){
				$phone = $telephone;
			}else{
				$sql8='SELECT telephone FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql8);
				while ($donnees = $reponse->fetch())
				{
					$phone = $donnees['telephone'];
				}
			}
		
			if(!empty($mdp) && !empty($mdp2)){
				if($mdp != $mdp2){
					echo "Mot de passe non valide." ;
					$sql9='SELECT mdp FROM user WHERE id="'.$user.'" ';
					$reponse = $bdd->query($sql9);
					while ($donnees = $reponse->fetch())
					{
						$pass = $donnees['mdp'];
					}
				} else {
					$pass = sha1($mdp);
				}
			}else{
				$sql9='SELECT mdp FROM user WHERE id="'.$user.'" ';
				$reponse = $bdd->query($sql9);
				while ($donnees = $reponse->fetch())
				{
					$pass = $donnees['mdp'];
				}
			}		
		$reponse2->execute();
	}
?>