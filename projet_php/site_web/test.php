<?php
session_start();
$json = file_get_contents("perso/inscription.json");
$parsed_json = json_decode($json);
$i = 0;
$j = 0;
while (isset($parsed_json[$i]))
  {
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    if ($login == $parsed_json[$i][0]->email)
      {
        if ($parsed_json[$i][0]->pwd == $pwd)
          {
            $j = 1;
	    $_SESSION['login'] = $login;
	    header('Location: pageac.php');

          }
      }
    $i++;
  }
if ($j == 0)
  {
    header('Location: sessionserreur.php');
  }

?>