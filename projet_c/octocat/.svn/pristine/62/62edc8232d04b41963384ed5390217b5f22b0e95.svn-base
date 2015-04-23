/*
** play2.c for play2 in /home/friaa_a/projet/pakel_l/Octocat
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Nov 14 10:16:23 2014 FRIAA Amine
** Last update Fri Nov 14 13:17:14 2014 FRIAA Amine
*/

#include <stdlib.h>

char	*readLine();
void	my_putchar(int c);
void	my_putstr(char *str);

void	affiche3d(char     aff[7][16])
{
  int a;
  int b;

  a = 0;

  while (a < 7)
    {
      b = 0;
      while (b < 16)
        {
          my_putchar(aff[a][b]);
          b++;
        }
      my_putchar('\n');
      a++;
    }
}
int	*xy(char commande, int y, int x)
{
  int *tab = malloc(2);

  if (commande == 'w')
    x--;
  if (commande == 's')
    x++;
  if (commande == 'd')
    y++;
  if (commande == 'a')
    y--;
  tab[0] = x;
  tab[1] = y;
  return tab;
}
void	deplacement(char tab[7][16], int x, int y, int n, int i, char *commande)
{
  int	*tabi;


  for (i = 0; x != 4 || y != 15; i++)
    {
      if (commande[i] == '\0')
        {
          my_putstr("Pause interdit perdu !\n");
          n = 1;
          return;
        }
      tabi = xy(commande[i], y, x);
      x = tabi[0];
      y = tabi[1];
      if (tab[x][y] == '0')
        {
	  my_putstr("Vous etes tombe nez a nez avec un 0 il vous a laisse aucune chance desole\n");
          n = 1;
          return;
        }
    }
  if (n == 0)
    my_putstr("Vous avez gagne\n");
}
void	play2()
{
  int	x;
  int	y;
  int	i;
  int	n;
  char	*commande;
  char	tab[7][16] = {
    {'0','0','0','0','0','0','0','0','0','0','0','0','0','0','0', '0'},
    {'8',' ',' ','0','0',' ',' ',' ',' ',' ',' ','0',' ',' ',' ', '0'},
    {'0','0',' ','0','0',' ','0','0','0','0','0','0',' ','0',' ', '0'},
    {'0','0',' ','0','0',' ','0','0',' ',' ',' ',' ',' ','0',' ', '0'},
    {'0','0',' ',' ',' ',' ','0','0','0',' ','0','0',' ','0',' ', ' '},
    {'0','0','0','0','0',' ',' ',' ',' ',' ','0','0',' ','0','0', '0'},
    {'0','0','0','0','0','0','0','0','0','0','0','0','0','0','0', '0'}};
  affiche3d(tab);
  commande = readLine();
  y = i = n = 0;
  x = 1;
  deplacement(tab, x, y, n, i, commande);
}
