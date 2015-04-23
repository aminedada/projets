<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/css.css"  />
    <link rel="stylesheet" href="../css-footer.css"  />
    <link rel="stylesheet" href="csscon.css"  />
    <title>YournextDream</title>
  </head>
 <!-- Header -->
  <body>
<?php require_once('../header_cont.php');?>
 <!-- Page presentent produit en europe -->
      <section>
	<center>

   <?php
   $tab = file_get_contents('continent.json');
$tab = json_decode($tab);
$name = $_GET['continent'];
echo '<div class=europe>';
 echo 'Nos voyages en ';
echo $tab->$name->name;
echo "&nbsp:";
echo '</div>';
echo '<br />';
echo '<br />';
echo '<a href='.$tab->$name->href1.' ><img class="europeim" src='.$tab->$name->img1.' style="box-shadow:0 0 15px 5px grey;"/></a>';
if ($tab->$name->href2 != null)
  echo '<a href='.$tab->$name->href2.' ><img class="europeim" src='.$tab->$name->img2.' style="box-shadow:0 0 15px 5px grey;"/></a>';    
?>
	</center>	
      </section>
      <!-- Footer -->
<?php require_once('../footer_cont.php');?>    
</div>
  </body>
</html>

