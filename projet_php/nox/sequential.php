<?php
// sequential.php for Projet No X in /home/guiber_t/algo/Projet_No-x/guiber_t/nox
//
// Made by GUIBERT Timothe
// Login   <guiber_t@etna-alternance.net>
//
// Started on  Fri Nov  7 10:50:22 2014 GUIBERT Timothe
// Last update Mon Nov 10 12:19:38 2014 GUIBERT Timothe
//

require_once('./trad.php');

function sequential($dicox, $messagex)
{
  global $trad;
  for ($i = 0; $i < count($dicox); ++$i)
    {
      for($j = 0; $j < count($messagex); ++$j)
        {
          if ($dicox[$i] == $messagex[$j])
	    if ($trad == 1)
	      trad($dicox[$i]);
	    else
	      echo $dicox[$i]."\n";
        }
    }
}