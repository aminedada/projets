<?php
// test.php for test in /home/friaa_a/projet/dyna
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Tue Nov 25 11:10:40 2014 FRIAA Amine
// Last update Thu Nov 27 09:38:24 2014 SANCHEZ Geoffrey
//
require_once('tuto_json/lib_json.php');
$email = $_POST['email'][0]['email'];
$login = $_POST['email'][0]['login'];
$pwd = $_POST['email'][0]['pwd'];
if ($email != null && $login != null && $pwd != null)
  {
    print_r($_POST['email']);
    echo $login;
    //  $email1 = $email[0];
    $json = file_get_contents("perso/inscription.json");
    $parsed_json = json_decode($json);
    $i = 0;
    $j = 0;
	while (isset($parsed_json[$i]))
	  {
	    if ($parsed_json[$i][0]->login == $login || $email == $parsed_json[$i][0]->email)
	      {
		$j = 1;
	      }	
	    $i++;
	  }	
	if ($j != 1)
	  {
	    $email2 = $_POST['email'];
	    include_file($email2, "perso/inscription.json");
	    header('Location: sessions.php');
	  }
	else 
	  {	
	    echo "test ta mere";
	    header('Location: inscriptionerreur.php');
	  } 
  }
else 
  header('Location: inscriptionerreur1.php');
?>