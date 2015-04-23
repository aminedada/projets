<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/css.css"  />
    <link rel="stylesheet" href="css/css-footer.css"  />
<title>YournextDream</title>
  </head>
  <body>
    <?php 
   session_start();
   require_once('header.php');
$json = file_get_contents("perso/inscription.json");
$parsed_json = json_decode($json);
$i = 0;
$login = $_SESSION['login'];
    while (isset($parsed_json[$i]))
      {
	if ($login == $parsed_json[$i][0]->email)
	  {
	    if ($_POST['nomc'] != null)
	      $parsed_json[$i][0]->nom = $_POST['nomc'];
	    if ($_POST['prenomc'] != null)
	      $parsed_json[$i][0]->prenom = $_POST['prenomc'];
	    if ($_POST['agec'] != null)
	      $parsed_json[$i][0]->age = $_POST['agec'];
	    if ($_POST['paysc'] != null)
	      $parsed_json[$i][0]->pays = $_POST['paysc'];
	    if ($_POST['adressec'] != null)
	      $parsed_json[$i][0]->adresse = $_POST['adressec'];
	    if ($_POST['codepostalc'] != null)
	      $parsed_json[$i][0]->codepostal = $_POST['codepostalc'];
	    if ($_POST['loginc'] != null)
	      $parsed_json[$i][0]->login = $_POST['loginc'];
	    echo "Nom:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	    if ($_POST['nom'] == 1)
	      {
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<input type="text" name="nomc" size="20"/>';
		echo '</form>';
	      }
	    else
	      {
		echo $parsed_json[$i][0]->nom;
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<button class=modif name="nom" value="1" onclick="ClicBouton();">Modifier</button>';
		echo'</form>';
	      }
	    echo '<br />';
	    echo "Prenom:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	    if ($_POST['prenom'] == 1)
	      {
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<input type="text" name="prenomc" size="20"/>';
		echo '</form>';
	      } 
	    else
	      { 
		echo $parsed_json[$i][0]->prenom;
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<button class=modif name="prenom" value="1" onclick="ClicBouton();">Modifier</button>';
		echo'</form>';	    
	      }
	    echo '<br />';
	    echo "Age:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	    if ($_POST['age'] == 1)
              {
                echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
                echo '<input type="text" name="agec" size="20"/>';
                echo '</form>';
	      } 
            else
	      { 
		echo $parsed_json[$i][0]->age;
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<button class=modif name="age" value="1" onclick="ClicBouton();">Modifier</button>';
		echo'</form>';	    
	      } 
	    echo '<br />';
	    echo "Pays:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";        	 
	    if ($_POST['pays'] == 1)
              {
                echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
                echo '<input type="text" name="paysc" size="20"/>';
                echo '</form>';
	      } 
	    else
	      { 
		echo $parsed_json[$i][0]->pays;
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<button class=modif name="pays" value="1" onclick="ClicBouton();">Modifier</button>';
		echo'</form>';	    
	      }
	    echo '<br />';
	    echo "Adresse:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	    if ($_POST['adresse'] == 1)
	      {
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
                echo '<input type="text" name="adressec" size="20"/>';
                echo '</form>';
	      } 
            else
	      { 
		echo $parsed_json[$i][0]->adresse;
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<button class=modif name="adresse" value="1" onclick="ClicBouton();">Modifier</button>';
		echo'</form>';
	      }	    
	    echo '<br />';
	    echo "Code postal:&nbsp&nbsp";
	    if ($_POST['codepostal'] == 1)
              {
                echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
                echo '<input type="text" name="codepostalc" size="20"/>';
                echo '</form>';
	      } 
	    else
	      { 
		echo $parsed_json[$i][0]->codepostal;
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<button class=modif name="codepostal" value="1" onclick="ClicBouton();">Modifier</button>';
		echo'</form>';	  
	      }  
	    echo '<br />';
	    echo "Login:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";	
	    if ($_POST['login'] == 1)
              {
                echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
                echo '<input type="text" name="loginc" size="20"/>';
                echo '</form>';
	      } 
            else
	      { 
		echo $parsed_json[$i][0]->login;
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
		echo '<FORM METHOD=POST ACTION="moncompte.php" class=modif>';
		echo '<button name="login" value="1" onclick="ClicBouton();">Modifier</button>';
		echo'</form>';
	      }
	  }
	$i++;
      }
$parsed_json = json_encode($parsed_json);
file_put_contents('perso/inscription.json', $parsed_json);
session_start();
$login = $_SESSION['login'];
$commande = file_get_contents('panier/commande.json');
$commande = json_decode($commande);
//print_r($commande);
$i = 0;
$a = 0;
//echo $login;
echo '<div class=commande>';
echo '<br />';
while (isset($commande[$i]))
  {
    if (strpos($commande[$i], $login) !== false)
      {
	$com = file_get_contents("panier/commande$commande[$i].json");
	$com = json_decode($com);
	$a = 0;
	echo '<br />';
	echo "Commande du ";
	echo substr($commande[$i], (strpos($commande[$i], "|") + 1), 7);
	echo "h";
	echo substr($commande[$i], (strpos($commande[$i], '|') + 8), 2);
	echo "min";
	echo '<br />';
	echo '<br />';
	while (isset($com[$a]))
	  {	
	    echo substr($com[$a], 0, strpos($com[$a], "("));
	    $prix = substr($com[$a], strpos($com[$a], '(') + 1,  (strpos($com[$a], ')') - strpos($com[$a], '(') - 1));
	    $prixbase = substr($com[$a], strpos($com[$a], '[') + 1,  (strpos($com[$a], ']') - strpos($com[$a], '[') - 1));
	    $nbr = $prix / $prixbase;
	    if ($nbr == 1)
	      echo "&nbsp&nbsp$nbr personne";		  
	    else 
	      echo "&nbsp&nbsp$nbr personnes";		  
	    echo "&nbsp&nbspPrix: $prix$";
	    echo '<br />';
	    $a++;
	  }
	echo '<div class="line2"></div>';   
   }
    echo '<br />';

    $i++;
  }
echo '</div>';



?>
  <?php    require_once('footer.php');?>
    </div>

  </body>
</html>
