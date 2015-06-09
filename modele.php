<?php
try
{
    $bdd = new PDO('mysql:host=lightskyespear.mysql.db;dbname=lightskyespear;charset=utf8','lightskyespear', 'yez7rh78ug7P');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>