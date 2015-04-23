/*
** text.c for  in /home/friaa_a/piscine_c/projet2/jalet_y/quete_1
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Sat Oct 11 09:20:17 2014 FRIAA Amine
** Last update Sat Oct 11 12:43:12 2014 FRIAA Amine
*/

#include "my_libe.h"
#include "perso.h"
#include <stdlib.h>
#include <stdio.h>
#include <unistd.h>

void	ragnarok_srceen()
{
  my_putstr("\033[33m█▀▀█ █▀▀█ █▀▀▀ █▀▀▄ █▀▀█ █▀▀█ █▀▀█ █─█ \n");
  my_putstr("█▄▄▀ █▄▄█ █─▀█ █──█ █▄▄█ █▄▄▀ █──█ █▀▄  \n");
  my_putstr("▀─▀▀ ▀──▀ ▀▀▀▀ ▀──▀ ▀──▀ ▀─▀▀ ▀▀▀▀ ▀─▀\n"); 
  my_putstr("\n\n	\033[31mPress enter to continue\033[0m");
  readLine();
}
