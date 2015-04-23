<?php
// affichage.php for affichage in /home/friaa_a/projet/guiber_t/guiber_t/nox
//
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
//
// Started on  Fri Nov  7 14:35:40 2014 FRIAA Amine
// Last update Mon Nov 10 10:23:13 2014 GUIBERT Timothe
//

function aff()
{
  echo "\n";
  echo "\033[32mBienvenue agent 007\n";
  echo "Choisir une option\n";
  echo "1 : Votre 'dicowesh'\n";
  echo "2 : Décoder votre message\n";
  echo "3 : Mode traduction\n";
  echo "4 : Ajouter un mot à votre dictionnaire\n";
  echo "exit : quitter\033[0m\n";
}

function ima()
{
  echo "\033[H\033[2J";
  echo "\033[33;5;1m
      ___           ___           ___
     /\  \         /\  \         /|  |
     \:\  \       /::\  \       |:|  |
      \:\  \     /:/\:\  \      |:|  |
  _____\:\  \   /:/  \:\  \   __|:|__|
 /::::::::\__\ /:/__/ \:\__\ /::::\__\_____
 \:\~~\~~\/__/ \:\  \ /:/  / ~~~~\::::/___/
  \:\  \        \:\  /:/  /      |:|~~|
   \:\  \        \:\/:/  /       |:|  |
    \:\__\        \::/  /        |:|__|
     \/__/         \/__/         |/__/      \033[0m\n";
}

function dico()
{
  $dico = file_get_contents("./dico.txt");
  $tab = explode(" ", $dico);
  for ($i = 0; $i < count($tab) - 1; ++$i)
    {
      echo "$tab[$i]\n";
    }
}