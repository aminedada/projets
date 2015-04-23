/*
** menu.c for menu in /home/friaa_a/projet/pakel_l/Octocat
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Nov 14 10:09:54 2014 FRIAA Amine
** Last update Fri Nov 14 17:40:08 2014 FRIAA Amine
*/

#include<stdio.h>

void	play1(char tab[7][15], int n, int mp);
void	play2();
void	my_putstr(char *str);
int	aidemenu(char tab[7][15], int n, char cc)
{
  int c;

  c = 0;
  while ((c = getchar()) != '\n' && c != EOF);
  my_putstr("\033[H\033[2J");
  if (cc == '1')
    {
      play1(tab, n, 0);
      return 1;
    }
  if (cc == '2')
    {
      play2();
      return 2;
    }
  if (cc == '3')
    {
      play1(tab, n, 1);
      return 3;
    }
  if (cc == '4')
    {

      play1(tab, n, 2);
      return 4;
    }
  return 0;
}
