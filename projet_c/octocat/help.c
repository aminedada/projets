/*
** help.c for  in /home/pakel_l/projet/Octocat/pakel_l
** 
** Made by PAKEL Louis
** Login   <pakel_l@etna-alternance.net>
** 
** Started on  Fri Nov 14 09:45:01 2014 PAKEL Louis
** Last update Fri Nov 14 11:24:29 2014 PAKEL Louis
*/

#include <stdio.h>
#include <unistd.h>

void	my_putstr(char *str);

void	help()
{
  my_putstr("\n\t\tHELP\n");
  my_putstr("\n\t\t\tGame button :\n\t\t\t W : Up");
  my_putstr("\n\t\t\t A : Left");
  my_putstr("\n\t\t\t S : Down");
  my_putstr("\n\t\t\t D : Right\n\n\n\n\n");
}
