<?php 
session_start(); 
$login = $_SESSION["login"];
$pass = $_SESSION["pass"];
?>

<!-- Faire des requetes SQL pour récuperer toutes les données d'un utilisateur une fois connecté pour pouvoir les récupérer sur toutes nos pages au fur et à mesure de sa navigation sur le site -->