<!DOCTYPE html> 
<html lang="fr"> 
<head> 
  <meta charset="utf-8">
  <title>Compoflex89</title> 
 <link rel="stylesheet" type="text/css" href="styles.css" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1" /> <!-- Indipensable pour le responsive design -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head> 

<body> 

<?php include"header.php" ?>
<div class="row" id="fil_ariane">
	<div class="col col-sm-10 col-md-10 col-lg-12">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item active" aria-current="page">Accueil</li>
		  </ol>
		</nav>
	</div>
	<div class="col-2 d-block d-lg-none">
		<a href="https://www.facebook.com/compoflex89/" target="_blank"><img src="img/facebook50.png" alt="logo-facebook-compoflex89" class="img-fluid px-auto d-block"></a>
	</div>

</div>

<div class="container-fluid" style="background-color: #000000" id="page">
	<div class="row pt-3"> <!-- affichage de cette division uniquement sur grand écran -->
		<div class="col-2" style="background-color: #000000">
		</div>
		<div class="col-8 rounded d-none d-xl-block" style="background-color: #FFFFFF" > <!-- ecran ordi-->
			<div class="row" id="bandeau_anime">
				<div class="col-3 " id="colgauche">
					<img id="commande" src="img/commande.png" alt="feuille_commande" class="w-100 p-3 mx-auto" style="position: absolute">

				</div>
				<div class="col-6" id="colcentre">
					<h3 id="titrebandeau" class="text-center">A ne pas manquer</h3>
					<p id="textbandeau1" class="text-center" style="height: 50px;">Clichés commandés avant midi,<br> départ dans la journée</p>
					<img id="camion"  src="img/camion100.png" alt="camion">
					<p id="textbandeau2" class="text-center" style="height: 50px;">Livrés chez vous le lendemain</p>
				</div>
				<div class="col-3 " id="coldroite">
					
					<img id="colis_recu" src="img/colis_recu.png" alt="colis" class="w-100 p-3 mx-auto" style="position: absolute">
				</div>
			</div>
		</div>
		<div class="col-8 rounded d-none d-lg-block d-xl-none" style="background-color: #FFFFFF" > <!-- ecran tablette paysage-->
			<div class="row" id="bandeau_anime_tablette">
				<div class="col-3 " id="colgauche_tablette">
					<p id="textbandeau1bis" class="text-center" style="height: 25px;"><br>Clichés commandés avant midi</p>
				</div>
				<div class="col-6" id="colcentre_tablette">
					<h2 id="titrebandeaubis" class="text-center">A ne pas manquer</h2>
					<img id="camionbis" alt="camion" src="img/camion100.png">
				</div>
				<div class="col-3 " id="coldroite_tablette">
					<p id="textbandeau2bis" class="text-center" style="height: 25px;"><br><br>Livrés chez vous le lendemain</p>
				</div>
			</div>
		</div>
		<div class="col-2" style="background-color: #000000">
		</div>
	</div>

<div class="row p-3" id="card" > <!-- Affichage uniquement en grand écran-->
	<div class="col-12 d-none d-lg-block">	
		<div class="row card-deck" style="background-color: #000000" id="card1">
			<div class="col-lg-4 card border border-white" style="background-color: #000000" >
			  <img src="img/bureau_compoflex.jpg" class="card-img-top" alt="bureau-compoflex89">
			  <div class="card-body ">
			    <h5 class="card-title text-white">Compoflex89</h5>
			    <p class="card-text text-white">La société <strong>compoflex89</strong> a été créée en septembre 2016 par <strong>Fredéric Lesire</strong>, plus de 30 ans d'expérience en imprimerie flexographie...</p>
			    <a href="page_entreprise.php" class="btn text-white" style="background-color: #26613A">Lire la suite</a>
			  </div>
			</div>
			<br>
			<div class="col-lg-4 card border border-white" style="background-color: #000000" >
			  <img src="img/traceur.jpg" class="card-img-top" alt="traceur-compoflex89">
			  <div class="card-body">
			    <h5 class="card-title text-white">Produits</h5>
			    <p class="card-text text-white">Clichés polymères et magnésium</p>
			    <a href="page_produits.php" class="btn text-white" style="background-color: #26613A">Lire la suite</a>
			  </div>
			</div>
			<br>
			<div class="col-lg-4 card border border-white" style="background-color: #000000" >
			  <img src="img/compoflex_plaquette1.png" class="card-img-top" alt="plaquette_presentation-compoflex89">
			  <div class="card-body">
			    <h5 class="card-title text-white">Services</h5>
			    <p class="card-text text-white">Imprimerie et maquettes</p>
			    <a href="page_services.php" class="btn text-white" style="background-color: #26613A">Lire la suite</a>
			  </div>
			</div>
		</div>
	</div>	

<!-- Affichage uniquemen petit écran-->
	<div class="row" id="pagesm">
	  <div class="col-12 d-lg-none d-sm-block">
	  	<div class="media border border-white mt-2">
		  <img src="img/bureau_compoflex.jpg" class="align-self-center m-1 w-50" alt="bureau-compoflex89">
		  <div class="media-body text-white p-2" style="background-color: #000000">
		    <h5 class="mt-0 text-white">Compoflex89</h5>
		    <p class="textesm">La société <strong>compoflex89</strong>a été créée en...</p>
		    <a href="page_entreprise.php" class="btn text-white w-75" style="background-color: #26613A; font-size: 0.5em;">Lire la suite</a>
		  </div>
		</div>
		<div class="media border border-white mt-2">
		  <img src="img/traceur.jpg" class="align-self-center m-1 w-50" alt="traceur-compoflex89">
		  <div class="media-body text-white p-2" style="background-color: #000000">
		    <h5 class="mt-0">Produits</h5>
		    <p class="textesm">Clichés polymères et magnésium...</p>
		    <a href="page_produits.php" class="btn text-white w-75" style="background-color: #26613A; font-size: 0.5em;">Lire la suite</a>
		  </div>
		</div>
		<div class="media border border-white mt-2">
		  <img src="img/compoflex_plaquette1.png" class="align-self-center m-1 w-50" alt="plaquette_presentation-compoflex89">
		  <div class="media-body text-white p-2" style="background-color: #000000">
		    <h5 class="mt-0">Services</h5>
		    <p class="textesm">Imprimerie et maquettes...</p>
		    <a href="page_services.php" class="btn text-white w-75" style="background-color: #26613A; font-size: 0.5em;">Lire la suite</a>
		  </div>
		</div>
	  </div>	
	</div>
</div>
</div>


<?php include"footer.php" ?>


<!-- Utilisation jQuery-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script type="text/javascript">

$(document).ready(function(){

	$("body").click(function(){
		function fadingImage(){
			$("#colis_recu").hide();
			$("#commande").hide();
			$("#commande").show(2000);
			$('#textbandeau1').animate({fontSize: "2em"},2000);
			$('#textbandeau1').animate({fontSize: "1em"},1000);

			$("#camion").delay(3000).animate({marginLeft:"400px"},2000);
			$("#camionbis").delay(3000).animate({marginLeft:"250px"},2000);
			$("#commande").hide(1000,function() {
				$('#colis_recu').show(2000);
				});
			$('#textbandeau2').delay(3500).animate({fontSize: "2em"},1500);
			$('#textbandeau2').animate({fontSize: "1em"},1000);
			$("#camion").delay(1000).animate({marginLeft:"0px"},10);
			$("#camionbis").delay(1000).animate({marginLeft:"0px"},10);
			
			//$('#imgbandeau1').fadeOut(1250).fadeIn(1250).fadeOut(1250).fadeIn(1250);
		}
		 
		$(function(){
			fadingImage();
		 
			window.setInterval(fadingImage,6000);
		});

	}); 
	$('body').trigger('click');// déclenche l'action au chargement du script
});
</script>

</body> 
</html>


