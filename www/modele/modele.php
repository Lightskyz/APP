<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	
<?php
try
{
    $bdd = new PDO('mysql:host=localhost:8889;dbname=pear;charset=utf8','root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>

</html>