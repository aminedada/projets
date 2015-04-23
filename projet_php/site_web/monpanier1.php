<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/css.css"  />
    <link rel="stylesheet" href="css-footer.css"  />
<title>YournextDream</title>
  </head>
  <body>
 <?php 
   require_once('header.php');?>
<center>
<p>Votre panier:</p>
 <?php
session_start();
$login = $_SESSION['login'];
$path = "panier/panier".$login.".json";
   $j = " ";
   if ($_POST['supre'] == 1)
     {
       file_put_contents($path, $j);
     }
   else
     {
       $i = 0;
       $panier = file_get_contents($path);
       $panier = json_decode($panier);
       if ($_POST['suprear'] == null)
	 {
	   while (isset($_POST['produit'][$i]))
	     {  
	       echo $_POST['produit'][$i];
	       $panier[] = $_POST['produit'][$i];
	       $i++;
	     }
	 }
       else 
	 {
	   $i = 0;
	   $a = 0;
	   while (isset($panier[$i]))
	     {
	       if ($_POST['suprear'] != $i)

		 {
		   $panier1[$a] = $panier[$i]; 
		   $a++;
		 }
	       $i++;
	     }
	   $panier = $panier1;
	 }
       preg_match_all("/[(]*[\d]*[)]/", implode($panier), $prix);
       $prix = $prix[0];
       preg_match_all("/[[]*[\d]*[]]/", implode($panier), $prixbase);
       $prixbase = $prixbase[0];
       $i = 0;
       while (isset($panier[$i]))
	 { 
	   $registre[$i] = substr($panier[$i], 0, stripos($panier[$i], "("));
	   $b = 0;
           while (isset($registre[$i][$b]))
             {
               if ($registre[$i][$b] == '|')
                 {
                   $registre[$i][$b] = " ";
                 }
               $b++;
             }
	   echo $registre[$i]; 	   
	   $prix[$i] = substr($prix[$i], 1, (stripos($prix[$i], ")") - 1));
	   $prixbase[$i] = substr($prixbase[$i], 1, (stripos($prixbase[$i], "]") - 1));
	   $n = 0;
	   $m = 0;
	   if ($_POST['quantite'] == $i && $i != 0)
	     $prix[$i] = $prix[$i] + $prixbase[$i];
	   if ($_POST['quantitem'] == $i && $i != 0 && ($prix[$i] - $prixbase[$i]) > 0)
	     $prix[$i] = $prix[$i] - $prixbase[$i];
	   if ($_POST['quantite'] == 'a')
	     $prix[0] = $prix[0] + $prixbase[0];
	   if ($_POST['quantitem'] == 'a' && ($prix[$i] - $prixbase[$i]) > 0)
	     $prix[0] = $prix[0] - $prixbase[0];
	   $registre[$i] = "$registre[$i] ($prix[$i]) [$prixbase[$i]]";
	   echo '<center>';
	   echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";    
	   echo '<div class="supreart">';	   	   	   
	   echo '<FORM METHOD=POST ACTION="monpanier.php">';
	   if ($i == 0)
	   echo '<button name="quantite" value="a" onclick="ClicBouton();">+</button>';
	   else
	   echo '<button name="quantite" value='.$i.' onclick="ClicBouton();">+</button>';
	   echo '</form>';
	   echo '</div>';
	   echo '<div class="supreart">';	   	   	   
	   echo '<FORM METHOD=POST ACTION="monpanier.php">';
	   if ($i == 0)
	     echo '<button  name="quantitem" value="a" onclick="ClicBouton();">-</button>';
	   else
	     echo '<button  name="quantitem" value='.$i.' onclick="ClicBouton();">-</button>';
	   echo '</form>';
	   echo '</div>';
	   $nbr = $prix[$i] / $prixbase[$i];
	   echo "&nbsp&nbsp";       
	   echo " $nbr";
	   if ($nbr == 1)
	     echo "&nbsppersonne";
	   else 
	     echo "&nbsppersonnes";
	   echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$prix[$i]$";    
	   echo '<div class="supreart">';	   	   	   
	   echo '<FORM METHOD=POST ACTION="monpanier.php">';
	   echo '<button  name="suprear" value='.$i.' onclick="ClicBouton();">Suprimer Article</button>';
	   echo '</form>';
	   echo '</div>';
	   echo '<div class="line2"></div>';
	   echo '</center>';
	   $i++;
	   ?>
	   <br />
	   <br />
	   <br />

	      <?php
	      }
       $i = 0;
       $total = 0;
       while (isset($prix[$i]))
	 {
	   $total = $prix[$i] + $total;
	   $i++;
	 }
       ?>
       <br />
       <br />
	  <?php
	  if ($total != 0)
       echo "Total: &nbsp&nbsp$total$";
       $registre = json_encode($registre);
       file_put_contents($path, $registre);
       if ($total == 0)
	 echo "Panier vide";
     }
?>        
</center>
<?php
  if ($total != 0)
       {
	 echo '<FORM METHOD=POST ACTION="monpanier.php">';
	 echo '<button  class="panier" name="supre" value="1" onclick="ClicBouton();">Suprimer panier</button>';
	 echo '</form>';
	 echo '<br />';
	 echo '<br />';
	 echo '<FORM METHOD=POST ACTION="commande.php">';
	 echo '<button  class="panier1" name="supre" value="1" onclick="ClicBouton();">Commander</button>';
	 echo '</form>';
       }
     ?>     
 </center>
      <footer>
	<div style="width:autopx;height:150px;color:white;background:grey;">
	  <a href="footer/SAV.html"><img style="width:autopx;position:relative;left:1%;" src="image/mockup.png" alt="SAV"/></a>
	  <a href="footer/contact.html"><img style="width:autopx;position:relative;left:20%;top:5%;" src="image/contacte.png" alt="contacte"/></a>
	  <a href="footer/rejoignez-nous.html"><img style="width:autopx;position:relative;left:40%;top:5%" src="image/rejoignez-nous.png" alt="rejoignez\
																	-nous"/></a>
	  <a href="footer/moncompte.html"><img style="width:autopx;position:relative;left:60%;top:5%" src="image/mon-compte.png" alt="mon-compte"/></a>
	  <a href="footer/paiment.html"><img style="width:autopx;position:relative;left:-15%;top:65%;" src="image/paiment.png" alt="paiment"/></a>
	  <a href="footer/livraison.html"><img style="width:autopx;position:relative;left:5%;top:65%;" src="image/livraison.png" alt="livraison"/></a>
	  <a href="footer/aide.html"><img style="width:autopx;position:relative;left:30%;top:65%;" src="image/aide.png" alt="aide"/></a>
	  
	  
	</div>
	<div style="background:grey;width:autopx;height:auto;">
          <center><em>  YournextDream - 2014 Copyright ©</em></center>
        </div>
      </footer>
    </div>
  </body>
</html>
