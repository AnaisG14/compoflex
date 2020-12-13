<!DOCTYPE html> 
<html lang="fr"> 
<head> 
  <meta charset="utf-8">
  <title>Compoflex89 Frédéric Lesire</title> 
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
		    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Entreprise</li>
		  </ol>
		</nav>
	</div>
	<div class="col-2 d-block d-lg-none">
		<a href="https://www.facebook.com/compoflex89/" target="_blank"><img src="img/facebook50.png" alt="logo-facebook-compoflex89" class="img-fluid px-auto d-block"></a>
	</div>
</div>
<div class="container-fluid" style="background-color: #000000" id="page"> 
	<div class="row">
		<div class="col-2 d-none d-md-block">
		</div>
		<div class="col col-md-8 col-sm-12 p-3">
			<h1 class="text-white text-center">Compoflex89 créée par Frédéric Lesire</h1>
			<img class="img-fluid mx-auto d-block" alt="carte_commerciale-compoflex89" src="img/compoflex_carte_commerciale.png">
		</div>
		<div class="col-2 d-none d-md-block">
		</div>
	</div>
	<div class="row">
		<div class="col d-none d-md-block col-md-2  px-auto pt-5">
			<img class="img-fluid mx-auto d-block rounded-circle" src="img/fred200.jpg" alt="frederic-lesire">
		</div>
		<div class="col col-sm-12 col-md-6  text-white text-justify pt-2 pr-5">
			
		<p>La société <strong>compoflex89 basée à Joigny dans l'Yonne</strong>, a été créée en septembre 2016 par Fredéric Lesire, infographiste, 30 ans d'expérience en <strong>imprimerie et flexographie</strong>.</p>
			<p>Cette société, spécialisée dans la flexographie propose également des tampons encreurs, maquettes et tous travaux d'imprimerie. Elle travaille pour des professionnels mais peut également répondre à la demande de particuliers.</p>
			<p>La satisfaction du client est la priorité de l'entreprise : tout est mis en œuvre pour produire un travail de qualité dans les meilleurs délais.
			Les maquettes sont réalisées dans un délai de 24h maximum et les clichés commandés avant midi partent le jour même.</p>
		</div>
		<div class="col-4 d-none d-md-block embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item pr-2" src="https://www.youtube.com/embed/ZGK9M2bzETI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="col-12 d-md-none d-sm-block embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item pr-2" src="https://www.youtube.com/embed/ZGK9M2bzETI" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
			$("#commande").hide(1000,function() {
				$('#colis_recu').show(2000);
				});
			$('#textbandeau2').delay(3500).animate({fontSize: "2em"},1500);
			$('#textbandeau2').animate({fontSize: "1em"},1000);
			$("#camion").delay(1000).animate({marginLeft:"0px"},10);
			
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
