<?php require('connexion.php'); ?>
<html>
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	<title>O'Drink - Germaine DUPONT</title>
	<style>
		#gauche {
			position: absolute;
			top:0;
			left:0;
			width: 20%;
			height: 100%;
			background-color: rgba(42,63,84,1);
		}
		
		#gauche article {
			position: absolute;
			left:0;
			right: 0;
			top:50%;
			-ms-transform: translateY(-50%);
   			-webkit-transform: translateY(-50%);
   			 transform: translateY(-50%);
			margin: 0 auto;
			width: 70%;
		}
		
		#gauche img {
			display: block;
		}
		
		#gauche img[alt="Avatar"]{
			width: 170px;
			margin-top: 50px;
			border: 4px white solid;
		}
		
		#gauche p {
			font-family: "Roboto", sans-serif;
			font-size: 14px;
			color:white;
			padding-top: 20px;
			line-height: 22px;
			padding-bottom: 15px;
		}
		
		#gauche a {
			font-family: "Roboto", sans-serif;
			font-size: 14px;
			color:rgba(42,63,84,1);
			padding: 5px 20px 5px 20px;
			background-color: white;
			text-decoration: none;
		}
		#gauche a:hover {
			background-color: rgba(42,63,84,1);
			color:white;
		}
		
		#droite {
			position: absolute;
			top:0;
			right:0;
			width: 80%;
			height: 100%;
		}
		
		#droite img[alt="warning"]{
			width: 60px;
			display: inline-block;
			vertical-align: top;
			padding-right: 20px;
			padding-top: 15px;
		}
		#droite #popup p{
			width: 70%;
			display: inline-block;
			vertical-align: top;
			background-color: #ff6d00;
			padding: 10px;
			font-family: "Roboto", sans-serif;
			font-size: 18px;
			font-weight: 700;
			color:white;
		}
		#droite #popup, #droite #bouteille {
			width: 700px;
			margin: 0 auto;
		}
		#droite article {
			padding: 10%;
		}
		
		#droite #bouteille img {
			height: 400px;
			margin-top: 20px;
			display: inline-block;
			vertical-align: top;
		}
		
		#droite #bouteille p {
			display: inline-block;
			vertical-align: top;
			font-family: "Roboto", sans-serif;
			font-size: 24px;
			font-weight: 700;
			padding-left: 30px;
			padding-top: 45px;
			color:rgba(42,63,84,1);
		}
		
		#droite #bouteille p strong {
			font-size: 100px;
		}
	</style>
	<script type="text/javascript">
		function difference(avant, apres){
	       	var dt=new Date();
	       	window.status=dt.getHours()+":"+dt.getMinutes()+":"+dt.getSeconds();
			var boire = false;
			if(avant == apres ){
				boire = true;
			} else {
				boire = false;
			}
			return boire;
   		}
	</script>
</head>
<body>
	<section id="gauche">
		<article>
			<img src="img/logo.svg" alt="Logo">
			<img src="img/avatar.jpg" alt="Avatar">
			<p>
				<strong>Nom :</strong> DUPONT <br>
				<strong>Prénom :</strong> Germaine <br>
			 	<strong>Âge :</strong> 82 ans <br>
			</p>
			<a href="hydratation.php">La patient a bu</a>
		</article>
	</section>
	<section id="droite">
		<article>
			<div id="popup" style="display: none;">
				<img src="img/warning-01.svg" alt="warning">
				<p>Germaine n’a pa bu depuis 2h, il est temp de lui rappelez de s’hydrater  !</p>
			</div>
			<div id="bouteille">
				<img src="img/bouteillevide.svg" alt="Bouteille" id="img_bouteille">
				<p>
					La bouteille de Germaine DUPONT <br>est remplis à <br>
					<?php if(isset($_GET['pourcentage'])){ ?>
					<strong id="taux_remp"><?php echo $_GET['pourcentage']; ?> %</strong><br>
					<?php } else { ?>
					<strong id="taux_remp">0 %</strong><br>
					<?php } ?>
					La température est de<br>
					<strong>32°C</strong><br>
				</p>
			</div>
		</article>
	</section>
	<script type="text/javascript">
		$(document).ready(function($) {
			$('body').keypress(function( event ) {
				if(event.keyCode == 100){
					$('#taux_remp').html('25 %');
					$('#img_bouteille').attr('src', 'img/bouteille25.svg');
					var pourcentage = 25;
					$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
				} else if(event.keyCode == 115){
					$('#taux_remp').html('50 %');
					$('#img_bouteille').attr('src', 'img/bouteille50.svg');
					var pourcentage = 50;
					$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
				} else if(event.keyCode == 113){
					$('#taux_remp').html('75 %');
					$('#img_bouteille').attr('src', 'img/bouteille75.svg');
					var pourcentage = 75;
					$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
				} else if(event.keyCode == 122){
					$('#taux_remp').html('100 %');
					$('#img_bouteille').attr('src', 'img/bouteille100.svg');
					var pourcentage = 100;
					$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
				} else {
					$('#taux_remp').html('0 %');
					$('#img_bouteille').attr('src', 'img/bouteillevide.svg');
					var pourcentage = 0;
				}
 			});
 			pourcentage = $('#taux_remp').text();
			var pourcentage = parseInt(pourcentage.replace(/\D+/g,''));
			switch(pourcentage) {
			    case 0:
			        $('#img_bouteille').attr('src', 'img/bouteillevide.svg');
			        break;
			    case 25:
			       	$('#img_bouteille').attr('src', 'img/bouteille25.svg');
			        break;
			    case 50:
			        $('#img_bouteille').attr('src', 'img/bouteille50.svg');
			        break;
			    case 75:
			        $('#img_bouteille').attr('src', 'img/bouteille75.svg');
			        break;
			    case 100:
			        $('#img_bouteille').attr('src', 'img/bouteille100.svg');
			        break;
			    default:
			        $('#img_bouteille').attr('src', 'img/bouteillevide.svg');
			}
			$("a").attr("href", "hydratation.php?pourcentage="+pourcentage);
	
			<?php 
			$req = $bdd->query('SELECT pourcentage FROM hydratation WHERE id = (SELECT MAX(id) FROM hydratation);')
		    or exit(print_r($req->errorInfo()));                     
		    $req->execute(); ?>
		    
   			setInterval(function(){ 
   				pourcentage = $('#taux_remp').text();	// On récupère le pourcentage
				var pourcentage = parseInt(pourcentage.replace(/\D+/g,''));
				console.log(pourcentage);
   				<?php while($res = $req -> fetch()){ ?>		//On récupère la dernière information d'hydratation
   				var diff = difference(<?php echo $res['pourcentage']; ?>, pourcentage); 	//On test la différence entre les deux 
   				<?php } ?>
   				if(diff == true){
   					$('#popup').show();
   				} else {
   					$('#popup').hide();
   				}
   			}, 5000); //Test toutes les 5 secondes
   			

			
		});
	</script>
</body>
</html>