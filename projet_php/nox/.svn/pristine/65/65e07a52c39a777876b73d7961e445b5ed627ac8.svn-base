<?php
// verif.php for Projet No x in /home/guiber_t/algo/Projet_No-x/guiber_t/nox
//
// Made by GUIBERT Timothe
// Login   <guiber_t@etna-alternance.net>
//
// Started on  Fri Nov  7 10:52:49 2014 GUIBERT Timothe
// Last update Fri Nov  7 14:51:59 2014 FRIAA Amine
//

function verif($argv, $argc)
{
  if ($argc > 2)
    {
      if (!is_file($argv[1]))
	exit("Error : $argv[1] is not a file \n");
      else if (!is_file($argv[2]))
	exit("Error : $argv[2] is not a file \n");
      if (!is_readable($argv[1]))
	exit("Error : $argv[1] is not readable \n");
      else if (!is_readable($argv[2]))
	exit("Error : $argv[2] is not readable \n");
    }
  else
    exit("Error : Not enough arguments \n");
}