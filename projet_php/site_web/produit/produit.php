<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/css.css"  />
    <link rel="stylesheet" href="../css/css-1.css"  />
    <link rel="stylesheet" href="../css/css-footer.css"  />
<title>YournextDream</title>
  </head>
  <body>
   <?php require_once('../header_prod.php');?>
<?php
   //   require_once('../tuto_json/lib_json.php');
//$user = select_all('produit.json');
//$tab = file_get_contents('produit1.json');
//echo "test1";
//$tab = array("ukraine"=>array("titre"=>"Kiev, Ukraine", "text"=>"L'Ukraine, destination de rêve pour les touristes ... pour vous ce sera la place de la liberation ! L'Ukraine a vécu une révolution par encore totalement fini... Vous ferez peut etre parti des prochains mouvements ! Mais quel camps choisirez vous ? Sortez de votre ordinaire pour entrer dans une aventure plus que fantastique ! il y aura de la joie, de la colere... Alors levez-vous et venez a Kiev!", "legend"=>"Kiev, place de la liberation", "img1"=>"../images_produit/ukraine1.jpg", "img2"=>"../images_produit/ukraine2.jpg", "prix1"=>"450$", "prix2"=>"550$", "prix3"=>"680$", "prix4"=>"959$", "val1"=>"Kiev, Ukraine 7j/6n du 21/11 au 28/11 (450) [450] ", "val2"=>"Kiev, Ukraine 7j/6n du 28/11 au 05/12 (550) [550] ", "val3"=>"Kiev, Ukraine 7j/6n du 05/11 au 12/12 (680) [680] ", "val4"=>"Kievaaaaaaaaaaa, Ukraine 7j/6n du 12/12 au 19/12 (959) [959] "));
//echo "test2";
//$tab = json_encode($tab);
//include_file($ukraine, 'produit.json');
//file_put_contents('produit1.json', $tab);
$tab = file_get_contents('produit.json');
$tab = json_decode($tab);
echo '<br>';
//       print_r($tab);
$name = $_GET['produit'];
       //  echo $name;
$val1 = $tab->$name->val1;
echo '<img class="calendrier" src="../images_produit/calendrier.png"/>';
echo '<section class="produit1">';
echo '<article>';
echo '<h2>'.$tab->$name->titre.'&nbsp&nbsp</h2>';
echo $tab->$name->text;
echo '</article>';
echo '<a><img src='.$tab->$name->img1.' alt="Corée du Nord" style="box-shadow:0 0 15px 5px grey;"/>';
echo '<img src='.$tab->$name->img2.' alt="Corée du Nord" style="box-shadow:0 0 15px 5px grey;"/></a>';      
//if ($tab->$name->img3 != null)
//echo '<img src='.$tab->$name->img3.' alt="Corée du Nord" style="box-shadow:0 0 15px 5px grey;"/></a>';      
echo '<br />';
echo '<em>'.$tab->$name->legend.'</em>';
echo         '<div class="placetab">';
echo '<table>';
echo '<br /><br /><br /><br /><br />';
echo '<tr>';
echo '<th></th>';
echo '<th>Periode</th>';
echo '<th>Tarifs</th>';
echo '</tr>';
echo '<tr>';
echo '<FORM METHOD=POST ACTION="../monpanier.php">';
echo '<td><input type="checkbox" name="produit[]" value='.$tab->$name->val1.' id="moins15" /></td><label for="moins15"><td>7j/6n du 21/11 au 28/11</td><td> '.$tab->$name->prix1.' TTC</td></label>';
echo '</tr>';
echo '<tr>';
echo'<td><input type="checkbox" name="produit[]" value='.$tab->$name->val2.' id="medium15-25" /></td><label for="medium15-25"><td>7j/6n du 28/11 au 5/12</td><td> '.$tab->$name->prix2.' TTC </td></label>';
echo '</tr>';
echo '<tr>';
echo '<td><input type="checkbox" name="produit[]" value='.$tab->$name->val3.' id="medium25-40" /></td><label for="medium25-40"><td>7j/6n du 5/12 au 12/12</td><td> '.$tab->$name->prix3.' TTC</td> </label>';
echo '</tr>';
echo '<tr>';
echo '<td> <input type="checkbox" name="produit[]" value='.$tab->$name->val4.' id="plus40" /></td><label for="plus40"><td>7j/6n du 12/12 au 19/12</td><td> '.$tab->$name->prix4.' TTC </td></label><br />';

?>

</tr>
</table>
<FORM METHOD=POST ACTION="../monpanier.php">
<button class="reserver" onclick="ClicBouton();" name="reserver" >Reserver</button>
          </form>
        </div>
      </section>
      <br /><br /><br />
   <?php require_once('../footer_prod.php');?>
    </div>
  </body>
</html>
