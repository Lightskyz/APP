<?php
session_start();
echo'<html>
      <meta charset = "utf-8">
</html>';
echo 'Bonjour '.$_SESSION['email'].'.Vous êtes sur la page prout<br />';
echo'<a href="./logout.php">Déconnexion</a>';
?>