<?php
include("../../modele/modele.php");
//on récupère l'email de l'url
$email = $_GET['log'];
//on récupère le token de l'url
$cle = $_GET['token'];
$req = $bdd->prepare('SELECT token FROM user WHERE email = :email');
$req->bindValue(':token',$_GET['token'], PDO::PARAM_STR);
$req->execute(array(':email' => $email));
        $data=$req->fetch();
//si le token de l'url est le même que celui de la bdd on redirige l'utilisateur vers la page changement de mot de passe
if($data['token'] == $cle){
	header('location: http://localhost/app/vues/back/changementMdp.php?log='.$email.'&token='.$cle.'');
}
//sinon
else {
	echo 'reste poli Thomas !';
}
?>