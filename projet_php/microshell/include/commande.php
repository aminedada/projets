<?php
// commande.php for commande in /home/friaa_a/piscine_php/MicroShell/friaa_a/include
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Fri Oct 17 09:42:13 2014 FRIAA Amine
// Last update Sat Oct 18 15:32:20 2014 FRIAA Amine
//

function commande_echo($params)
{
  unset($params[0]);
  foreach ($params as $key => $value)
    {
      if ($value != "echo")
        {
          $value = str_replace("\"","",$value);
          echo(ltrim($value)." ");
        }
    }
  echo("\n");
}

function commande_pwd($params)
{
  echo getcwd()."\n";
}

function commande_env($params)
{
  foreach ($_ENV as $t => $ch)
    echo "$t=$ch \n";
}

function commande_cd($params)
{
  static $ovr;
  if (!isset($params[1]))
    {
      $ovr = getcwd();
      chdir(getenv("HOME"));
    }
  else if ($params[1] == "-")
    {
      chdir($ovr);
      echo $ovr."\n";
    }
  else if (file_exists($params[1]) == FALSE && isset($params[1]) && $params[1] != "-")
    {
      echo "cd".$ovr.": NO such file or directory\n";
    }
  else if (is_dir($params[1]) == FALSE && isset($params[1]) && $params[1] != "-")
    {
      echo "cd".$ovr.": Not directory\n";
    }
  else if(is_readable($params[1]) == FALSE)
    {
      echo "cd".$ovr.": Permission denied\n";
    }
  else
    {
      $ovr = getcwd();
      chdir ("$params[1]");
    }
}
function commande_help()
{
  echo "\033[32mcd : go to home directory\n";
  echo "cd .. : go to last directory\n";
  echo "cd - : go to last directory you were in\n";
  echo "ls : does the file exist?\n";
  echo "pwd : show current working directory\n";
  echo "cat file : list file1 to screen\n";
  echo "env : displays all environment variables\n";
  echo "setenv : change or add an environment variable\n";
  echo "unsetenv : deletes an environment variable\n";
  echo "exit : program output\033[0m\n";
}
?>