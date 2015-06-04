<?php
include("Panier.php");
$user = 1 ;
affichepanier($user);
if(!empty($_POST['changer'])){
	if($_POST['changer'] == 'Delete'){
		deletepanier($user, $_GET['product']);
	}else {
		updatepanier($user, $_GET['product'], $_POST['quantite']);
	}
	echo " Veuillez actualiser votre page web.";
}

/*
if(!empty($_POST['delete'])){
	deletepanier($user, $donnees2['id_product']);
} else {
if(!empty($_POST["changer"])){
	echo $_POST["$data"];
	updatepanier($user, $donnees3['id'],$_POST["$data"]);
}
}
*/
?>