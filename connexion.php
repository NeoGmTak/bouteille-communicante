<?php 
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=bouteille;charset=utf8', 'root', ''); //Rajouter "root" au dernier champ si MAC

	}
	catch(Exception $e)
	{
        die('Erreur : '.$e->getMessage());
	}

?>