#!/usr/bin/env php
<?php
// ajout_def.php for projet no x in /home/guiber_t/algo/Projet_No-x/guiber_t/nox
// 
// Made by GUIBERT Timothe
// Login   <guiber_t@etna-alternance.net>
// 
// Started on  Mon Nov 10 09:29:23 2014 GUIBERT Timothe
// Last update Mon Nov 10 09:44:16 2014 GUIBERT Timothe
//

function ajout_def()
{
  $stdin = fopen('php://stdin', 'r');
  global $wesh_fr;

  echo "Veuillez inserer le mot en wesh (avec un espace derriere)\n";
  echo "$> ";
  $get = substr(fgets($stdin), 0, -1);
  if ($get == "\n")
    echo "Vous n'avez pas inserez le mot !\n";
  else
    {
      file_put_contents('./dico.txt', $get, FILE_APPEND);
      echo "Ajout effectué\n";
    }
}