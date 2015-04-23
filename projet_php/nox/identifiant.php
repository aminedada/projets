<?php
// identifiant.php for Projet no x in /home/guiber_t/algo/Projet_No-x/guiber_t/nox
//
// Made by GUIBERT Timothe
// Login   <guiber_t@etna-alternance.net>
//
// Started on  Fri Nov  7 19:03:37 2014 GUIBERT Timothe
// Last update Mon Nov 10 12:19:12 2014 GUIBERT Timothe
//

function identifiant()
{
  $i = 3;

  while ($i >= 1)
    {
      echo "\033[31;1m Entrez votre identifiant\033[0m\n";
      $line = my_readline("$> ");
      $param = explode(" ", $line);
      if ($param[0] == "007")
        {
          echo "\033[31;1m Entrez votre mot de passe\033[0m\n";
          system('stty -echo');
          $line = my_readline("$> ");
          system('stty echo');
          $param = explode(" ", $line);
          if ($param[0] == "bond")
            return (1);
          else
            {
              echo "Mot de passe incorrecte !\n";
              --$i;
            }
        }
      else
        {
          echo "Identifiant incorrecte !\n";
          --$i;
        }
    }
  echo "Connection impossible. Le programme va donc quitter\n\n";
  exit (0);
}