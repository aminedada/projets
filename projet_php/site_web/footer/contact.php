<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../css/css.css"  />
    <link rel="stylesheet" href="../css-footer.css"  />
    <title>YournextDream</title>
  </head>
  <body>
<?php require_once('../header_foot.php');?>
      <FORM METHOD=POST ACTION="../mail.php">
	<input type="text" name="prenom" size="75" placeholder="Votre Prenom"/>
   <br />
	<input type="text" name="nom" size="75" placeholder="Votre nom"/>
   <br />
	<input type="email" name="email" size="75" placeholder="exemple@gmail.com"/>
   <br />
	<TEXTAREA name="message" rows=5 cols=30 placeholder="Une question ?"></TEXTAREA>   
   <br />
	<input type="submit" name="envoyer" value="Envoyer"/>
      </form>
      <?php require_once('../footer_foot.php');?>
    </div>
  </body>
</html>

  
