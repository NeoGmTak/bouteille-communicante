<?php require('connexion.php'); ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>MakeyMakey</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	<style>
		body {
			background-color: #17c0ad;
			padding-top: 100px;
		}
		
		h1 {
			font-family: "Aileron", sans-serif;
			width: 100%;
			text-align: center;
			color:White;
			font-size: 60px;
		}
		 
		img {
			display: block;
			margin: 0 auto;
		}
		
		p, span {
			font-family: "Aileron", sans-serif;
			color:White;
			font-size: 60px;
			width: 100%;
			text-align: center;
			display: block;
		}
		#bouton_bu {
			width: 200px;
			height: 200px;
			background-color: green;
			font-size: 2vw;
			text-align: center;
		}
		a:link {
			text-decoration: none;
			color: black;
		}
	</style>
	<script type="text/javascript">
		function difference(avant, apres){
			var boire = false;
			if(avant >= apres ){
				boire = true;
			} else {
				boire = false;
			}
			return boire;
		}
	</script>
</head>
<body>

	<h1>Remplissage de la bouteille</h1>
	<span id="taux_remp">0 %</span>
	<img src="img/vides.svg" alt="bouteille" id="img_bouteille">
	<div id="alert">
		<span id="boire"></span>
		<audio src="son/617.wav" muted="false"></audio>
	</div>
	<a href="hydratation.php">
		<div id="bouton_bu">
			J'ai bu
		</div>
	</a>
	<script type="text/javascript">
		$(document).ready(function($) {
			var pourcentage = 0;
			$('body').keypress(function( event ) {
				if(event.keyCode == 100){
					$('#taux_remp').html('25 %');
					$('#img_bouteille').attr('src', 'img/0.svg');
					var pourcentage = 25;
					$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
				} else if(event.keyCode == 115){
					$('#taux_remp').html('50 %');
					$('#img_bouteille').attr('src', 'img/1.svg');
					var pourcentage = 50;
					$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
				} else if(event.keyCode == 113){
					$('#taux_remp').html('75 %');
					$('#img_bouteille').attr('src', 'img/2.svg');
					var pourcentage = 75;
					$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
				} else if(event.keyCode == 122){
					$('#taux_remp').html('100 %');
					$('#img_bouteille').attr('src', 'img/3.svg');
					var pourcentage = 100;
					$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
				} else {
					$('#taux_remp').html('0 %');
					$('#img_bouteille').attr('src', 'img/vide.svg');
					var pourcentage = 0;
				}
 			});
 			/*var pourcentage = $('#taux_remp').text();
			var pourcentage = parseInt(pourcentage.replace(/\D+/g,''));*/
			$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
			/*var test = pourcentage;
			pourcentage = $('#taux_remp').text();
			var pourcentage = parseInt(pourcentage.replace(/\D+/g,''));*/
			
			<?php 
			$req = $bdd->query('SELECT MAX(id) as id_hydr, date_hydra, pourcentage FROM hydratation;')
		    or exit(print_r($req->errorInfo()));
		                                       
		    $req->execute();
		    while($res = $req -> fetch()){
		    	/*echo $res['id_hydr']." ".$res['pourcentage'];*/
		    }
			?>
			var test = setInterval(alert('ça marche'), 2000);
			console.log(test);
			
		});
	</script>
</body>
</html>