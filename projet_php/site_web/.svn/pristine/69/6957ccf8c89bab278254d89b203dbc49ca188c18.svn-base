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
<!-- Page d'accueil -->                                                                                                                                       <section>                                                                                                                                         <?php
session_start();
$date = date("dMGis");
$login = $_SESSION['login'];
$commande = file_get_contents("panier/commande.json");
$commande = json_decode($commande);
$commande[] = "$login|$date|";
$commande = json_encode($commande);
file_put_contents("panier/commande.json", $commande);
$path = "panier/panier".$login.".json";
$commandeval = file_get_contents($path);
$pathc = "panier/commande".$login."|".$date."|".".json";
file_put_contents($pathc, $commandeval);
echo "Commande valider";
file_put_contents($path, " ");

?> 






</section>
      <!-- Footer -->                                                                                                                                      <?php require_once('footer.php');?>                                                                                                                      </div>                                                                                                                                                </body>                                                                                                                                               </html> 