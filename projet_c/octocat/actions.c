/*
** actions.c for  in /home/pakel_l/projet/Octocat/pakel_l
** 
** Made by PAKEL Louis
** Login   <pakel_l@etna-alternance.net>
** 
** Started on  Thu Nov 13 10:45:35 2014 PAKEL Louis
** Last update Fri Nov 14 17:41:13 2014 FRIAA Amine
*/

#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

void	play();
void	help();
char	*readLine();
void	my_putstr(char *str);
int	my_strcmp(char *s1, char *s2);
void	affichage();
int     aidemenu(char tab[7][15], int n, char cc);

int     menu(int n)
{
  char  cc;
  char  tab[7][15] = {
    {'0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'},
    {'8',' ',' ','0','0',' ',' ',' ',' ',' ','0','0',' ','0','0'},
    {'0','0',' ','0','0',' ','0','0','0',' ','0','0',' ','0','0'},
    {'0','0',' ','0','0',' ','0','0',' ',' ',' ',' ',' ','0','0'},
    {'0','0',' ',' ',' ',' ','0','0','0','0','0','0',' ','0','0'},
    {'0','0','0','0','0',' ',' ',' ',' ',' ','0','0',' ',' ',' '},
    {'0','0','0','0','0','0','0','0','0','0','0','0','0','0','0'}};
  n = 0;
  my_putstr("Choisisez un mode : Jeu normal 1\nChoisisez un mode : Jeu hard 2\n");
  my_putstr("Choisisez un mode : Jeu Octoview 3\nChoisisez un mode : Jeu Blind 4\n");
  my_putstr("Enter mode :");
  cc = getchar();
  return (aidemenu(tab, n, cc));
}
void	action()
{
  int n;
  n = 0;
  char	*input;
  input = readLine();
      if (my_strcmp(input, "1") == 0)
	{
	  menu(n);
	}
      else if (my_strcmp(input, "2") == 0)
	{
	  help();      
	}
      else if (my_strcmp(input, "3") == 0)
	{
	  my_putstr("End of program\n");
	  exit (0);
	}
      else 
	{
	  my_putstr("\n\nWrong command\n");
	}
      affichage();
}
