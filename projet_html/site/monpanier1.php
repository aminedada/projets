<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/css.css"  />
    <link rel="stylesheet" href="css-footer.css"  />
<title>YournextDream</title>
  </head>
  <body>
    <div class="placement">
      <section class="header">
	<h1>
          <a href= "pageac.html"><h1>Your<span class="next">next</span>Dream </h1></a>
          <FORM METHOD=POST ACTION="moncompte.html">
            <button class="compte" onclick="ClicBouton();">Mon Compte</button>
          </form>
          <button class="compte" onclick="ClicBouton();">Mon Panier</button>
          <br />
	</h1>
	<p>
          <FORM METHOD=POST ACTION="pageac.html">
            <div class="msgr"> Nous ne vendons pas des voyages
              <input class="recherche" type="text" name="a" size="75" placeholder="Your next dream ?" />
              mais du reve... </div>
          </form>
	</p>
	<ul>
          <li><a href="pageac.hmtl">Europe</a></li>
          <li><a href="continent/europe.html">Europe</a></li>
          <li><a href="continent/asie.html">Asie</a></li>
          <li><a href="continent/amerique.html">Amerique</a></li>
          <li><a href="continent/afrique.html">Afrique</a></li>
          <li><a href="continent/espace.html">Espace</a></li>
	</ul>
	<br />
      </section>
<center>
   <p>Votre panier:</p>
   <?php
   $j = " ";
   if ($_POST['supre'] == 1)
     {
       file_put_contents("panier/panier.json", $j);
     }
   else
     {
       $i = 0;
       $panier = file_get_contents("panier/panier.json");
       $panier = json_decode($panier);
       //$panier[0] = " ";
       if ($_POST['suprear'] == null)
	 {
	   while (isset($_POST['produit'][$i]))
	     {  
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
	   echo " *$nbr";
	   echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp$prix[$i]$";    
	   echo '<div class="supreart">';	   	   	   
	   echo '<FORM METHOD=POST ACTION="monpanier.php">';
	   echo '<button  name="suprear" value='.$i.' onclick="ClicBouton();">Suprimer Article</button>';
	   echo '</form>';
	   echo '</div>';
	   $i++;
	   ?>
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
       echo "Total: &nbsp&nbsp$total$";
       $registre = json_encode($registre);
       file_put_contents("panier/panier.json", $registre);
       //   header('Location: monpanier1.php');
       // exit();
     }
?>           
       <FORM METHOD=POST ACTION="monpanier.php">
   <button  name="supre" value="1" onclick="ClicBouton();">Suprimer panier</button>
   </form>
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
