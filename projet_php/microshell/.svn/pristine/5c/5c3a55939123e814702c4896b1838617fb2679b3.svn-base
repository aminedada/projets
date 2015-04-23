#!/usr/bin/env php
<?php
// microshell.php for microshell in /home/friaa_a/piscine_php/MicroShell/friaa_a
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Fri Oct 17 09:51:09 2014 FRIAA Amine
// Last update Sat Oct 18 00:28:58 2014 FRIAA Amine
//

require_once("./include/commande.php");
require_once("./include/commande2.php");
require_once("./affichage.php");

function my_readline($prompt = '')
{
  echo $prompt;
  $str = fgets(STDIN);
  if ($str == false)
    {
      echo "\n";
      exit(-1);
    }
  return rtrim($str, "\n");
}

while (true)
  {
    $line = my_readline("$> ");
    $params = explode(" ", $line);

    if ($params[0] == "exit")
      {
	echo "Program output\n";
	exit;
      }
    else if ($params[0] == "echo")
      commande_echo ($params);
    else if ($params[0] == "pwd")
      commande_pwd ($params);
    else if ($params[0] == "cd")
      commande_cd ($params);
    else if ($params[0] == "ls")
      commande_ls ($params);
    else if ($params[0] == "cat")
      commande_cat ($params);
    else if ($params[0] == "env")
      commande_env ($params);
    else if ($params[0] == "setenv")
      commande_setenv ($params);
    else if ($params[0] == "unsetenv")
      commande_unsetenv ($params);
    else if ($params[0] == "help")
      commande_help ();
    else 
      echo "command not found\n";
  }

my_readline($params);