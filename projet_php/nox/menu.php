<?php
// nox.php for projet no x in /home/guiber_t/algo/Projet_No-x/guiber_t/nox
//
// Made by GUIBERT Timothe
// Login   <guiber_t@etna-alternance.net>
//
// Started on  Fri Nov  7 09:23:58 2014 GUIBERT Timothe
// Last update Mon Nov 10 09:44:50 2014 GUIBERT Timothe
//

function nox($argv)
{
  $time_start = microtime(true);
  $dico = file_get_contents($argv[1]);
  $message = file_get_contents($argv[2]);
  $dico = explode(" ",$dico);
  $message = explode(" ", $message);
  sequential($dico, $message);
  $time_end = microtime(true);
  $time = $time_end - $time_start;
  echo "Temps du calcul : " . substr($time, 0, 6) . "secondes\n";
}