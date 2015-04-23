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
   <?php require_once('header.php'); ?>
<section>
   <center>
   <?php
   $g = 0;
$n = 0;
$image[0] = "imagequentin/colombie.png";
$image[1] = "imagequentin/ukraine.png";
$image[2] = "imagequentin/coree.png";
$image[3] = "imagequentin/nigeria.png";
$image[4] = "imagequentin/tchetche.png";
$image[5] = "imagequentin/mars.png";
$image[6] = "imagequentin/inde.png";
$image[7] = "imagequentin/centreaf.png";
$image[8] = "imagequentin/Untitled.png";
$href[0] = "produit/produit.php?produit=colombie";
$href[1] = "produit/produit.php?produit=ukraine";
$href[2] = "produit/produit.php?produit=coree";
$href[3] = "produit/produit.php?produit=nigeria";
$href[4] = "produit/produit.php?produit=tchetchenie";
$href[5] = "produit/produit.php?produit=mars";
$href[6] = "produit/produit.php?produit=inde";
$href[7] = "produit/produit.php?produit=centreaf";
$href[8] = "produit/produit.php?produit=bresil";
$text[0] = " Bogota colombie touristique gens formidables cartels de drogues guerres de gangs extremistes.";
$text[1] = " Ukraine Kiev place de la liberation révolution mouvements aventure fantastique joie colere ";
$text[2] = " Pyongyang Corée du Nord coree du nord République Populaire Démocratique de Corée pyongyang communisme Infrastructures totalitaires défilés militaires?";
$text[3] = " Abuja Nigeria ville incroyable circulation des voitures des motos des pouspousses des ânes ";
$text[4] = " Grozny Tchétchénie capitale de la tchetchenie pays en developpement croissance fulgurante instable l'Europe de l'Est europe de l'est ";
$text[5] = " Mars modules experience hors du commun le pas de l'homme.";
$text[6] = " Bombay Inde bidonvilles quartiers pauvres tant bien que mal pollution ";
$text[7] = " Chez les Pygmées Pygmees Centre Afrique Une tribu Un environnement incroyable la foret equatorial aventurier reveur ";
$text[8] = " Rio de janeiro , Bresil favelas bidonvilles brésiliens illegalement Rio de Janeiro tier population ";


$finder = $_POST['search'];
$finder = strtolower($finder);


for ($i = 0; $i < 9; $i++)
  {
    $text[$i] = strtolower($text[$i]);
    if (!empty($_POST['search']))
      if (strpos($text[$i], $finder) != false)      
	{
	  echo '<a href='.$href[$i].'> <img src= '.$image[$i].' class="imagemv" /> </a>';
	  $n = 1;
	  $g++;
	}
  }
if ($n == 0)
  echo "Aucuns voyages trouvés avec le(s) mot(s): $finder";
else
  {
  echo '<div class="rech">';
  echo "$g voyage(s) trouvés avec le mot: $finder";
  echo '</div>';
  }
?>
</section>
<?php require_once('footer.php'); ?>
</center>
</div>
</body>
</html>