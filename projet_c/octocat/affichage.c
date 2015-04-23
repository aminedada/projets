/*
** affichage.c for  in /home/pakel_l/projet/Octocat/pakel_l
** 
** Made by PAKEL Louis
** Login   <pakel_l@etna-alternance.net>
** 
** Started on  Wed Nov 12 16:56:18 2014 PAKEL Louis
** Last update Fri Nov 14 11:23:16 2014 PAKEL Louis
*/

#include <stdlib.h>
#include <stdio.h>
#include <unistd.h>

void	my_putchar(char c);
void	my_putstr(char *str);
void	action();
void	affichage()
{
  my_putstr("\t\t MENU :\n");
  my_putstr("\t\t\tEnter 1 : Play\n");
  my_putstr("\t\t\tEnter 2 : Help\n");
  my_putstr("\t\t\tEnter 3 : Quit\n");
  my_putstr("\n\n\tEnter a command :");
  action();
  my_putstr("\n\n");
}
