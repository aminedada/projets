<?php
// verifmenu.php for projet no x in /home/guiber_t/algo/Projet_No-x/guiber_t/nox
//
// Made by GUIBERT Timothe
// Login   <guiber_t@etna-alternance.net>
//
// Started on  Fri Nov  7 19:05:58 2014 GUIBERT Timothe
// Last update Mon Nov 10 10:24:35 2014 GUIBERT Timothe
//

function verif_param($param, $argv, $argc)
{
  global $trad;
  if ($param[0] == "exit")
    {
      echo "A vous de jouer Mr Bond !\n";
      exit;
    }
  else if ($param[0] == "1")
    dico();
  else if ($param[0] == "2")
    {
      verif($argv, $argc);
      nox($argv);
    }
  else if ($param[0] == "3")
    {
      if ($trad == 1)
        {
          $trad = 0;
          echo "Traduction retirée.";
        }
      else if ($trad == 0)
        {
          echo "Traduction ajoutée\n";
          $trad = 1;
        }
    }
  else if($param[0] == "4")
    ajout_def();
}