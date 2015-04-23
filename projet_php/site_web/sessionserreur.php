<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/css-session.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Bienvenue sur Your-next-Dream, le site de vente des voyages insolites.">
    <title>Your-next-Dream</title>
  </head>  
  <body>

   <form id="connect" method="post" action="test.php">                                   <legend>Formulaire de connexion</legend>                                                  <p><label for="login"></label><input type="login" id="login" name="login" tabindex="1" value="" placeholder="email" /></p                              
      <p><label for="pwd"></label><input type="password" id="pwd" name="pwd" tabindex="2" placeholder="Mot de passe"/></p>                              
<p>Mauvais mot de passe ou email</p>
      <div><input type="submit" name="submit" value="Connexion" tabindex="3" /></div>           </form>
    <form id="inscription" method="post" action="inscription.php">
      <div><input type="submit" name="submit" value="Inscription" tabindex="3" /></div>    
    </form>                                               
    
    <p>
      <?php
	 session_start();
	 
	 $_SESSION['prenom']= 'amine';
	 $_SESSION['nom']= 'friaa';
	 ?>
    </p>
  </body>
</html>
