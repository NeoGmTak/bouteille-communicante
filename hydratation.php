<?php 
	require('connexion.php');
	$req = $bdd->prepare('INSERT INTO hydratation(date_hydra, pourcentage)
    VALUES(:date_hydra, :pourcentage)')
    or exit(print_r($req->errorInfo()));
                                       
    $req->execute(array(
	            "date_hydra" => date("Y-m-d H:i:s"),
	            "pourcentage" => $_GET['pourcentage']
            ));

    print_r($req->errorInfo());
    header('Location: index.php?pourcentage='.$_GET['pourcentage']);
?>