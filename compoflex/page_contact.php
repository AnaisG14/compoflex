<!--Contact-->
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
        <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Contact</li>
      </ol>
    </nav>
  </div>
  <div class="col-2 d-block d-lg-none">
    <a href="https://www.facebook.com/compoflex89/" target="_blank"><img src="img/facebook50.png" alt="logo-facebook-compoflex89" class="img-fluid px-auto d-block"></a>
  </div>
</div>


<div class="container-fluid pt-2" style="background-color: #000000" id="carte">
	<div class="row">
		<div class="col-lg-12">
			<img class="img-fluid" alt="carte-joigny" src="img/carte.jpg" style="width: 100%">
		</div>
	</div>
</div>

<div class="container-fluid pt-2" style="background-color: #000000" id="page_renseignements">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="text-white text-center">Contactez Compoflex89</h1>
		</div>
		<div class="col col-md-3">
			<div class="card mb-3 text-center" >
  				<div class="card-header">
  				<img class="img" src="img/icones_adresse_contact.png" alt="icone_adresse">
  				</div>
  				<div class="card-body">
    				<h5 class="card-title">Adresse</h5>
    				<p class="card-text reduction">27 Rue Valentin Privé <br> 89300 JOIGNY</p>
  				</div>
			</div>
		</div>
		<div class="col col-md-3">
			<div class="card mb-3 text-center" >
  				<div class="card-header">
  				<img class="img" src="img/icone_enveloppe_contact.png" alt="icone_enveloppe">
  				</div>
  				<div class="card-body">
    				<h5 class="card-title">Email</h5>
    				<p class="card-text reduction"><br>compoflex89@gmail.com</p>
  				</div>
			</div>
		</div>
    <!-- Force next columns to break to new line -->
    <div class="w-100 d-md-none d-sm-block"></div>
		<div class="col col-md-3">
			<div class="card mb-3 text-center" >
  				<div class="card-header">
  				<img class="img" src="img/icone-tel_contact.png" alt="icone_telephone">
  				</div>
  				<div class="card-body">
    				<h5 class="card-title">Téléphone</h5>
    				<p class="card-text">03.86.43.04.94 <br> 06.89.50.67.70 </p>
  				</div>
			</div>
		</div>
		<div class="col col-md-3">
			<div class="card mb-3 text-center" >
  				<div class="card-header">
  				<img class="img" src="img/icone_horaire_contact.png" alt="icone_pendule">
  				</div>
  				<div class="card-body">
    				<h5 class="card-title">Horaires</h5>
    				<p class="card-text">Du lundi au vendredi <br> de 8h à 18h </p>
  				</div>
			</div>
		</div>
	</div>
</div>






<?php
/*
  ********************************************************************************************
  CONFIGURATION
  ********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'compoflex89@gmail.com';

// copie ? (envoie une copie au visiteur)
$copie = 'oui';

// Action du formulaire (si votre page a des paramètres dans l'URL)
// si cette page est index.php?page=contact alors mettez index.php?page=contact
// sinon, laissez vide
$form_action = '';

// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";

// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

/*
 * NoSpamQuestion affiche une question pour la validation d'un formulaire ...
 * $mode, mode question ou réponse par défaut tirage au sort de question {string}
 * $answer, lors de la demande d'une réponse à la question numero tant ... {int}
 *
 * @returns array
 *
 * Ajouter une question :
 * copier/coller ces lignes et remplir le contenu entre guillemets doubles :
 *
 * $array_pictures[$j]['num'] = $j; // ne pas changer cette ligne
 * $array_pictures[$j]['question'] = "mettre ici la question (correspondant à l'image si vous utilisez une image)";
 * $array_pictures[$j]['answer'] = "mettre ici la réponse à l'énigme";
 * $j++; // ne pas oublier cette ligne dans la copie :-)
 *
 * C'est tout. Question suivante ? :-)
 *
 */
function NoSpamQuestion($mode = 'ask', $answer = 0)
{
  $array_pictures = array(); $j = 0;

  $array_pictures[$j]['num'] = $j;
  $array_pictures[$j]['question'] = "Quelle est la cinquième lettre du mot Astux";
  $array_pictures[$j]['answer'] = "x";
  $j++;

  $array_pictures[$j]['num'] = $j;
  $array_pictures[$j]['question'] = "Le soleil est-il chaud ou froid ?";
  $array_pictures[$j]['answer'] = "chaud";
  $j++;

  $array_pictures[$j]['num'] = $j;
  $array_pictures[$j]['question'] = "Ecrire 12 en lettres";
  $array_pictures[$j]['answer'] = "douze";
  $j++;

  if ($mode != 'ans')
  {
    // on est en mode 'tirer au sort', on tire une image aléatoire
    $lambda = rand(0, count($array_pictures)-1);
    return $array_pictures[$lambda];
  }
  else
  {
    // on demande une vraie réponse
    foreach($array_pictures as $i => $array)
    {
      if ($i == $answer)
      {
        return $array;
        break;
      };
    };
  }; // Fin if ($mode != 'ans')
};
/*
  ********************************************************************************************
  FIN DE LA CONFIGURATION
  ********************************************************************************************
*/
  // on tire au sort une question
  $nospam = NoSpamQuestion();

/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
  $text = htmlspecialchars(trim($text), ENT_QUOTES);
  if (1 === get_magic_quotes_gpc())
  {
    $text = stripslashes($text);
  }

  $text = nl2br($text);
  return $text;
};

/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
  $value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
  return (($value === 0) || ($value === false)) ? false : true;
}

// formulaire envoyé, on récupère tous les champs.
$nom        = (isset($_POST['nom']))        ? Rec($_POST['nom'])        : '';
$prenom     = (isset($_POST['prenom']))     ? Rec($_POST['prenom'])     : '';
$email      = (isset($_POST['email']))      ? Rec($_POST['email'])      : '';
$objet      = (isset($_POST['objet']))      ? Rec($_POST['objet'])      : '';
$message    = (isset($_POST['message']))    ? Rec($_POST['message'])    : '';
$antispam_h = (isset($_POST['antispam_h'])) ? Rec($_POST['antispam_h']) : '';
$antispam_r = (isset($_POST['antispam_r'])) ? Rec($_POST['antispam_r']) : '';

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
  // On demande la vraie réponse
  $verif_nospam = NoSpamQuestion('ans', $antispam_r);

  if (strtolower($antispam_h) != strtolower($verif_nospam['answer']))
  {
    // le formulaire s'arrête ici
    echo '<p>Vous n\'avez pas répondu correctement à la question Antispam ...</p>';
  }
  else
  {
    if (($nom != '') && ($prenom != '') && ($email != '') && ($objet != '') && ($message != ''))
    {
      // les 4 variables sont remplies, on génère puis envoie le mail
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'From:'.$nom.' '.$prenom.' <'.$email.'>' . "\r\n" .
        'Reply-To:'.$email. "\r\n" .
        'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
        'Content-Disposition: inline'. "\r\n" .
        'Content-Transfer-Encoding: 7bit'." \r\n" .
        'X-Mailer:PHP/'.phpversion();

      // envoyer une copie au visiteur ?
      if ($copie == 'oui')
      {
        $cible = $destinataire.';'.$email;
      }
      else
      {
        $cible = $destinataire;
      };

      // Remplacement de certains caractères spéciaux
      $message = str_replace("&#039;","'",$message);
      $message = str_replace("&#8217;","'",$message);
      $message = str_replace("&quot;",'"',$message);
      $message = str_replace('<br>','',$message);
      $message = str_replace('<br />','',$message);
      $message = str_replace("&lt;","<",$message);
      $message = str_replace("&gt;",">",$message);
      $message = str_replace("&amp;","&",$message);

      // Envoi du mail
      $num_emails = 0;
      $tmp = explode(';', $cible);
      foreach($tmp as $email_destinataire)
      {
        if (mail($email_destinataire, $objet, $message, $headers))
          $num_emails++;
      }

      if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1)))
      {
        echo '<p>'.$message_envoye.'</p>';
      }
      else
      {
        echo '<p>'.$message_non_envoye.'</p>';
      };
    }
    else
    {
      // une des 3 variables (ou plus) est vide ...
      echo '<p>'.$message_formulaire_invalide.'</p>';
      $err_formulaire = true;
    };
  };
}; // fin du if (!isset($_POST['envoi']))

/*if (($err_formulaire) || (!isset($_POST['envoi'])))
{
  // afficher le formulaire
  echo '

  <form id="contact" method="post" action="'.$form_action.'">
  <fieldset><legend>Vos coordonnées</legend>
    <p><label for="nom">Nom :</label><input type="text" id="nom" name="nom" value="'.stripslashes($nom).'" tabindex="1" /></p>
    <p><label for="prenom">Prenom :</label><input type="text" id="prenom" name="prenom" value="'.stripslashes($prenom).'" tabindex="4" /></p>
    <p><label for="email">Email :</label><input type="text" id="email" name="email" value="'.stripslashes($email).'" tabindex="2" /></p>
  </fieldset>

  <fieldset><legend>Votre message :</legend>
    <p><label for="objet">Objet :</label><input type="text" id="objet" name="objet" value="'.stripslashes($objet).'" tabindex="3" /></p>
    <p><label for="message">Message :</label><textarea id="message" name="message" placeholder="Indiquer votre numéro de téléphone si vous souhaitez être rappeler" tabindex="4" cols="30" rows="8">'.stripslashes($message).'</textarea></p>
  </fieldset>

  <fieldset><legend>Antispam</legend>
    <p><label for="antispam_h">'.$nospam['question'].'</label><input type="text" name="antispam_h" id="antispam_h" /><input type="hidden" name="antispam_r" value="'.$nospam['num'].'" /></p>
  </fieldset>

  <div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
  </form>';
};*/


if (($err_formulaire) || (!isset($_POST['envoi'])))
{
  // afficher le formulaire
  echo '

  <div class="container-fluid text-white" style="background-color: #000000" id="page_formulaire">
  <div class="row justify-content-md-center">
    <div class="col col-md-8 col-sm-12 px-5">
      <p>Pour envoyer un message à la société, complétez le formulaire ci-dessous, une réponse vous sera apportée dans les meilleurs délais</p>
      <form id="contact" method="post" action="'.$form_action.'">
          <fieldset><legend>Vos coordonnées</legend>
          <div class="form-row">
            <div class="col">
              <label for="inputNom">Votre nom</label>
              <input type="text" id="nom" name="nom" class="form-control" placeholder="" value="'.stripslashes($nom).'" tabindex="1" />
            </div>
            <div class="col">
              <label for="inputPrenom">Votre prénom</label>
                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="" value="'.stripslashes($prenom).'" tabindex="2" />
             </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail">Votre adresse email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="" value="'.stripslashes($email).'" tabindex="3" />
            </div>
          </div>
        </fieldset>
        <fieldset><legend>Votre demande</legend>
        <div class="form-group">
              <label for="inputSujet">Sujet de la demande</label>
              <input type="text" name="objet" class="form-control" id="inputSujet" placeholder="" value="'.stripslashes($objet).'" tabindex="4" />
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Votre message</label>              
              <textarea  id="message" name="message" class="form-control" placeholder="Indiquer votre numéro de téléphone si vous souhaitez être rappelé" tabindex="5" rows="3">'.stripslashes($message).'</textarea>
          </div>
          <fieldset><legend>Antispam</legend>
            <p><label for="antispam_h">'.$nospam['question'].'</label><input type="text" name="antispam_h" id="antispam_h" /><input type="hidden" name="antispam_r" value="'.$nospam['num'].'" /> </p>
          </fieldset>
        </fieldset>
         <div class="pb-2" style="text-align:center; font-size: 1.5em;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
      </form>
    </div>
      <div class="col-4 d-none d-md-block pt-4 pl-4">
          <a href="https://www.facebook.com/compoflex89/" target="_blank"> <img src="img/lien_facebook.png" alt="logo-facebook-compoflex89" class="img-fluid"></a>
          <p>Retrouvez l\'actualité de Compoflex sur Facebook </p>
      </div>
    
  </div>
</div>';
};
?>







<?php include"footer.php" ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
