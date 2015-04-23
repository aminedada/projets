/*
** affichage.c for affichage in /home/friaa_a/projet/pakel_l/Octocat
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Nov 14 10:18:16 2014 FRIAA Amine
** Last update Fri Nov 14 17:10:25 2014 FRIAA Amine
*/

void	my_putstr(char *str);
void	my_putchar(int c);

void	affiche1(char aff[7][15], int x, int y)
{
  my_putstr("\n");
  if (aff[x - 1][y - 1] != '\0')
    my_putchar(aff[x - 1][y - 1]);
  else
    my_putchar(' ');
  if (aff[x - 1][y] != '\0')
    my_putchar(aff[x- 1][y]);
  else
    my_putchar(' ');
  if (aff[x - 1][y + 1] != '\0')
    my_putchar(aff[x - 1][y + 1]);
  else
    my_putchar(' ');
  my_putstr("\n");
}
void	affiche2(char aff[7][15], int x, int y)
{
  if (aff[x][y - 1] != '\0' && (y - 1) >= 0)
    my_putchar(aff[x][y - 1]);
  else
    my_putchar(' ');
  if (aff[x][y] != '\0')
    my_putchar(aff[x][y]);
  else
    my_putchar(' ');
  if (aff[x][y + 1] != '\0')
    my_putchar(aff[x][y + 1]);
  else
    my_putchar(' ');
  my_putstr("\n");
}
void	affiche3(char aff[7][15], int x, int y)
{
  if (aff[x + 1][y - 1] != '\0' && (y - 1)>= 0)
    my_putchar(aff[x + 1][y - 1]);
  else
    my_putchar(' ');
  if (aff[x + 1][y] != '\0')
    my_putchar(aff[x + 1][y]);
  else
    my_putchar(' ');
  if (aff[x + 1][y + 1] != '\0')
    my_putchar(aff[x + 1][y + 1]);
  else
    my_putchar(' ');
  my_putstr("\n");
}
void	affiche8(char aff[7][15], int x, int y)
{
  affiche1(aff, x, y);
  affiche2(aff, x, y);
  affiche3(aff, x, y);
}
