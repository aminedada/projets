<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/css.css"  />
    <link rel="stylesheet" href="css-footer.css"  />
    <link rel="stylesheet" href="css/image.css"  />
    <title>YournextDream</title>
  </head>
  <body>
<!-- Header -->
  <?php require_once('header.php');?>
<!-- Page de commande -->
      <section>
<?php
session_start();
$login = $_SESSION['login'];
$path = "panier/panier".$login.".json";
   echo '<center>';
   echo "Votre commande :";
echo '<br />';
echo '<br />';
 $commande = file_get_contents($path);
$commande = json_decode($commande);
preg_match_all("/[[]*[\d]*[]]/", implode($commande), $prixbase);
$prixbase = $prixbase[0];
preg_match_all("/[(]*[\d]*[)]/", implode($commande), $prix);
$prix = $prix[0];
$i = 0;
while (isset($commande[$i]))
  {
    $commande[$i] = substr($commande[$i], 0, stripos($commande[$i], "("));
    echo $commande[$i];
    $prix[$i] = substr($prix[$i], 1, (stripos($prix[$i], ")") - 1));
    $prixbase[$i] = substr($prixbase[$i], 1, (stripos($prixbase[$i], "]") - 1));
    $nbr = ($prix[$i] / $prixbase[$i]);
    if ($nbr == 1)
    echo "&nbsp&nbsp$nbr&nbsppersonne";
    else 
    echo "&nbsp&nbsp$nbr&nbsppersonnes";
    echo "&nbsp&nbsp$prix[$i]$";
    echo '<br />';
    $i++;
  }
$i = 0;
while (isset($prix[$i]))
  {
    $total = $total + $prix[$i]; 
    $i++;
  }
echo "Total:&nbsp$total$";
echo '</center>';
$json = file_get_contents("perso/inscription.json");
$parsed_json = json_decode($json);
$i = 0;
$login = $_SESSION['login'];
    while (isset($parsed_json[$i]))
      {
	if ($login == $parsed_json[$i][0]->email)
	  {
	    echo "Nom:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	    echo $parsed_json[$i][0]->nom;
	    echo '<br />';
	    echo "Prenom:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	    echo $parsed_json[$i][0]->prenom;
	    echo '<br />';
	    echo "Age:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	    echo $parsed_json[$i][0]->age;
	    echo '<br />';
	    echo "Pays:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	    echo $parsed_json[$i][0]->pays;
	    echo '<br />';
	    echo "Adresse:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	    echo $parsed_json[$i][0]->adresse;
	    echo '<br />';
	    echo "Code postal:&nbsp&nbsp";
	    echo $parsed_json[$i][0]->codepostal;
	    echo '<br />';
	    echo "Login:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	    echo $parsed_json[$i][0]->login;
	  }
	$i++;
      }
?>     
<FORM METHOD=POST ACTION="commandeval.php">
   <button  class="panier1" name="supre" value="1" onclick="ClicBouton();">Commander</button>
   </form>
 </section>
      <!-- Footer -->
  <?php require_once('footer.php');?>
    </div>
  </body>
</html>
