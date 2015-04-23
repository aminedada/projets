<?php
// trad.php for porjet no x in /home/guiber_t/algo/Projet_No-x/guiber_t/nox
//
// Made by GUIBERT Timothe
// Login   <guiber_t@etna-alternance.net>
//
// Started on  Fri Nov  7 11:44:17 2014 GUIBERT Timothe
// Last update Mon Nov 10 12:21:06 2014 GUIBERT Timothe
//

function trad($arg)
{
  $i = 0;
  $f = 0;
  $wesh_fr = [
	      "Bonjour" => "wesh",
	      "Fête/Soirée" => "teuf",
	      "Argent" => "oseille",
	      "Sac" => "keusse",
	      ];

  while($cmp = current($wesh_fr))
    {
      if ($arg == $cmp)
	{
	  echo "$arg = " . key($wesh_fr) . "\n";
	  $f = 1;
	}
      next($wesh_fr);
    }
  if ($f == 0)
    echo "Le mot n'est pas dans le dictionnaire\n";
}
