/*
** play.c for play in /home/friaa_a/projet/pakel_l/Octocat
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Nov 14 10:12:00 2014 FRIAA Amine
** Last update Fri Nov 14 13:20:28 2014 FRIAA Amine
*/

#include<stdio.h>
void	affiche2d(char     aff[7][15]);
void    my_putstr(char  *str);
void    my_putchar(int c);
void	affiche8(char aff[7][15], int x, int y);

int	deplacementy(char car, int y)
{
  if (car == 'a')
    {
      y = y - 1;
    }
  if (car == 'd')
    {
      y = y + 1;
    }
  return (y);
}
int	deplacementx(char car, int x)
{
  if (car == 'w')
    {
      x = x - 1;
    }
  if (car == 's')
    {
      x = x + 1;
    }
  return (x);
}
void	modea(char tab[7][15], int mp, int x, int y)
{
  my_putstr("\n\n\n\n\n");
  my_putstr("\033[H\033[2J");
  if (mp != 2)
    {
      if (mp == 0)
        affiche2d(tab);
      else
        affiche8(tab, x, y);
    }
  my_putstr("Votre deplacement :");
}
void	play1(char tab[7][15], int n, int mp)
{
  char	car;
  int	c;
  int	x;
  int	y;

  y = 0;
  x = 1;
  while (tab[5][14] != '8')
    {
      modea(tab ,mp, x, y);
      car = getchar();
      while ((c = getchar()) != '\n' && c != EOF);
      tab[x][y] = ' ';
      y = deplacementy(car, y);
      x = deplacementx(car, x);
      if (tab[x][y] == '0')
        {
          my_putstr("Perdu\n");
          n = 1;
          break;
        }
      else
        tab[x][y] = '8';
    }

  if (n == 0)
    my_putstr("Gagne !\n");
}
