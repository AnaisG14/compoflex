<!DOCTYPE html> 
<html lang="fr"> 
<head> 
  <meta charset="utf-8">
  <title>Compoflex89 Imprimerie Flexographie</title> 
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
		    <li class="breadcrumb-item">Prestations</li>
		    <li class="breadcrumb-item active" aria-current="page">Produits et services</li>
		  </ol>
		</nav>
	</div>
	<div class="col-2 d-block d-lg-none">
		<a href="https://www.facebook.com/compoflex89/" target="_blank"><img src="img/facebook50.png" alt="logo-facebook-compoflex89" class="img-fluid px-auto d-block"></a>
	</div>
</div>

<div class="container-fluid" style="background-color: #FFFFFF" id="page"> 
	<div class="row" style="height: 10px; background-color: #000000;">
	</div>
	<div id="titre_produits"><h1>Fabrication clichés flexo</h1> </div>
	<div class="row">
		<div class="col col-12 d-none d-md-block" id="panonglet" style="background-color: #000000"> <!-- Affichage md lg -->
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#produits" role="tab" aria-controls="home" aria-selected="true">Produits</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#services" role="tab" aria-controls="profile" aria-selected="false">Services</a>
			  </li>
			</ul>
			<div class="tab-content text-white " id="myTabContent"> 
				 <div class="tab-pane fade show active" id="produits" role="tabpanel" aria-labelledby="home-tab">
				  	<div class="row">
					  <div class="col-4 pl-2"> 	
					  	<h2 class="titre_prestation">Clichés polymères pour la flexographie </h2>
					  	<p>- Epaisseurs de clichés possibles : du 1,14 au 6 mm</p>
					  	<p>- Gravure à eau ou solvant</p>
					  	<p>- Toutes les maquettes sont adaptées aux contraintes d'impression.</p>
					  </div>
					  <div class="col-4 px-2">
					  	<h2 class="titre_prestation">Clichés magnésium</h2>
					  	<p>- Epaisseurs de clichés possibles : à partir du 20/10è</p>
					  </div>
					  <div class="col-4 pr-2">
					  	<h2 class="titre_prestation">Imprimerie :</h2>
					  	<p>- Tampons encreurs automatique ou manuel : standards, dateurs, bois…
							<br>-<strong> Cartes de visite ou commerciales</strong>
							<br>- <strong> Prospectus, affiches tout format</strong>
							<br>-<strong> Brochures ou dépliants </strong>
							<br>-<strong> Têtes de lettre </strong>
							<br>-<strong> Rubans adhésifs </strong>
						</p>
					  </div>
					</div>
					<div class="row">
					  <div class="col-4 pl-2"> 					  	
					  	<div id="carousel_gauche" class="carousel slide carousel-fade p-3" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="img/flexo1_carousel.png" class="d-block w-100" alt="photo-cliche-polymere">
						    </div>
						    <div class="carousel-item">
						      <img src="img/flexo2_carousel.png" class="d-block w-100" alt="photo-cliche-polymere">
						    </div>
						    <div class="carousel-item">
						      <img src="img/flexo3_carousel.png" class="d-block w-100" alt="photo-_cliche-_polymere">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carousel_gauche" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Précédente</span>
						  </a>
						  <a class="carousel-control-next" href="#carousel_gauche" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Suivante</span>
						  </a>
						</div>
					  </div>
					  <div class="col-4 px-2">
					  	<p><img src="img/magnesium.png" alt="cliche-magnesium" class="img-fluid p-3"></p>
					  </div>
					  <div class="col col-4">
						<div id="carousel_droit" class="carousel slide carousel-fade " data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="img/tampon_carousel.png" class="d-block w-100" alt="tampon-encreur">
						    </div>
						    <div class="carousel-item">
						      <img src="img/carte_visite_carousel.png" class="d-block w-100" alt="carte-visite">
						    </div>
						    <div class="carousel-item">
						      <img src="img/affiche_carousel.png" class="d-block w-100" alt="affiche">
						    </div>
						    <div class="carousel-item">
						      <img src="img/calendrier_carousel.png" class="d-block w-100" alt="calendrier">
						    </div>
						    <div class="carousel-item">
						      <img src="img/ruban_carousel.png" class="d-block w-100" alt="ruban-adhesif">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carousel_droit" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Précédente</span>
						  </a>
						  <a class="carousel-control-next" href="#carousel_droit" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Suivante</span>
						  </a>
						</div>
					  </div>
				 	</div>
				 </div>
				 <div class="tab-pane fade show" id="services" role="tabpanel" aria-labelledby="profile-tab">
				  	<h2 class="titre_prestation text-center">Maquettes, infographie :</h2>
					<div class="row">
						<div class="col-1">
						</div>
					  	<div class="col-5">
						    <p class="p-2">Les logiciels utilisés permettent d'ouvrir les fichiers fournis (pdf, tif, png, jpeg, doc, …) : Corel Draw, la suite Adobe, Pit Stop, la suite Office.</p>
						  	<p>A partir de ces fichiers, l'entreprise réalise vos travaux de maquettes et vous les fournit au format désiré :
								<br>- <strong>Cartes de visites</strong>
								<br>- <strong>Cartons d'invitations</strong>
								<br>- <strong>Affiches></strong>
								<br>- <strong>Reproductions de logo</strong>
								<br>- …
							</p>
						</div>
						<div class="col-5">
						  <img src="img/Imac.png" class="img-fluid" alt="logo-logiciel">
						</div>
						<div class="col-1">
						</div>
					</div>
					<div class="row" style="height:10px"></div>
				 </div>
			</div>
		</div>

		<div class="col col-12 d-md-none d-sm-block" id="panongletsm" style="background-color: #000000"> <!-- Affichage sm -->
			<ul class="nav nav-tabs" id="myTabsm" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="home-tabsm" data-toggle="tab" href="#produits2" role="tab" aria-controls="home" aria-selected="true">Produits</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" id="profile-tabsm" data-toggle="tab" href="#services2" role="tab" aria-controls="profile" aria-selected="false">Services</a>
			  </li>
			</ul>	
			<div class="tab-content text-white " id="myTabContentsm"> 
				 <div class="tab-pane fade show active" id="produits2" role="tabpanel" aria-labelledby="home-tab">
					  <div class="px-2 border"> 	
					  	<h2 class="titre_prestation">Clichés polymères pour la flexographie </h2>
					  	<p>- Epaisseurs de clichés possibles : du 1,14 au 6 mm</p>
					  	<p>- Gravure à eau ou solvant</p>
					  	<p>- Toutes les maquettes sont adaptées aux contraintes d'impression.</p>
					  	
					  	<div id="carousel_gauchesm" class="carousel slide carousel-fade p-3" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="img/flexo1_carousel.png" class="d-block w-100" alt="cliche-polymere">
						    </div>
						    <div class="carousel-item">
						      <img src="img/flexo2_carousel.png" class="d-block w-100" alt="cliche-polymere">
						    </div>
						    <div class="carousel-item">
						      <img src="img/flexo3_carousel.png" class="d-block w-100" alt="cliche-polymere">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carousel_gauche" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Précédente</span>
						  </a>
						  <a class="carousel-control-next" href="#carousel_gauche" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Suivante</span>
						  </a>
						</div>
					  </div>
					  <div class="px-2 border">
					  	<h2 class="titre_prestation">Clichés magnésium</h2>
					  	<p>- Epaisseurs de clichés possibles : à partir du 20/10è</p>
					  	<p><img src="img/magnesium.png" alt="cliche-magnesium" class="img-fluid p-3"></p>
					  </div>
					  <div class="px-2 border">
					  	<h2 class="titre_prestation">Imprimerie :</h2>
					  	<p>- Tampons encreurs automatique ou manuel : standards, dateurs, bois…
							<br>- Cartes de visite ou commerciales
							<br>- Prospectus, affiches tout format
							<br>- Brochures ou dépliants
							<br>- Têtes de lettre
							<br>- Rubans adhésifs
						</p>

						<div id="carousel_droitsm" class="carousel slide carousel-fade " data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img src="img/tampon_carousel.png" class="d-block w-100" alt="tampon-encreur">
						    </div>
						    <div class="carousel-item">
						      <img src="img/carte_visite_carousel.png" class="d-block w-100" alt="carte-visite-compflex89">
						    </div>
						    <div class="carousel-item">
						      <img src="img/affiche_carousel.png" class="d-block w-100" alt="affiche">
						    </div>
						    <div class="carousel-item">
						      <img src="img/calendrier_carousel.png" class="d-block w-100" alt="calendrier-compoflex89">
						    </div>
						    <div class="carousel-item">
						      <img src="img/ruban_carousel.png" class="d-block w-100" alt="ruban-adhesif">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carousel_droit" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Précédente</span>
						  </a>
						  <a class="carousel-control-next" href="#carousel_droit" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Suivante</span>
						  </a>
						</div>

					  </div>
				 </div>
				 <div class="tab-pane fade col-12" id="services2" role="tabpanel" aria-labelledby="profile-tab">
				  	<h2 class="titre_prestation">Maquettes, infographie :</h2>
					<p>Les logiciels utilisés permettent d'ouvrir les fichiers fournis (pdf, tif, png, jpeg, doc, …) : Corel Draw, la suite Adobe, Pit Stop, la suite Office.</p>
					<p>A partir de ces fichiers, l'entreprise réalise vos travaux de maquettes et vous les fournit au format désiré :
				<br>- <strong>Cartes de visites</strong>
					<br>- <strong>Carton d'invitations</strong>
					<br>- <strong>Affiches</strong>
					<br>- <strong>Reproductions de logo</strong>
					<br>- …</p>
					<div><br><img class="img-fluid" alt="logo-logiciel" src="img/Imac.png"></div>
					<div class="row" style="height:5px"></div>
				 </div>
			</div>
		</div>



	</div>
	<div class="row px-5" style="background-color: #000000">
		<a href="page_contact.php#contact" class="btn text-white btn-block btn-lg" style="background-color: #26613A">Demander un devis</a>
		<p></p>
	</div>
	<div class="row" style="background-color: #000000; height:10px;">
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

}

	
});


</script>

</body> 
</html>


