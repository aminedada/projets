#!/usr/bin/env php
<?php
// nox.php for nox in /home/guiber_t/algo/Projet_No-x/guiber_t/nox
// 
// Made by GUIBERT Timothe
// Login   <guiber_t@etna-alternance.net>
// 
// Started on  Mon Nov 10 10:10:05 2014 GUIBERT Timothe
// Last update Mon Nov 10 13:05:05 2014 FRIAA Amine
//
require_once("./affichage.php");
require_once("./verif.php");
require_once("./sequential.php");
require_once("./menu.php");
require_once("./identifiant.php");
require_once("./verifmenu.php");
require_once("./ajout_def.php");

global $trad;
$trad = 0;

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

function main($argv, $argc)
{
  ima();
  if (identifiant() == 1)
    {
      while(true)
	{
	  aff();
	  $line = my_readline("$> ");
	  $param = explode(" ", $line);
	  verif_param($param, $argv, $argc);
	}
    }
}

main($argv, $argc);