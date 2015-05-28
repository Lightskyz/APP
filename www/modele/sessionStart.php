<?php 
//On démarre la session
session_start(); 

//On crée nos variable de session dans $_SESSION
$email = $_SESSION["email"];
$mdp = $_SESSION["mdp"];
?>

<!-- Faire des requetes SQL pour récuperer toutes les données d'un utilisateur une fois connecté pour pouvoir les récupérer sur toutes nos pages au fur et à mesure de sa navigation sur le site -->