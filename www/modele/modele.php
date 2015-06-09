<?php
try
{
    $bdd = new PDO('mysql:host=localhost:3306;dbname=pear;charset=utf8','root', 'root');		// Connexion a la base de donnee pear avec pour login root et mdp root
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());													// Dans le cas ou on ne peux pas se connecter, alors on affiche un message d'erreur
}
?>