/*
** game.c for  in /home/friaa_a/piscine_c/projet2/jalet_y/quete_1
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct 10 18:09:00 2014 FRIAA Amine
** Last update Sat Oct 11 13:15:12 2014 JALET Yvane
*/

#include <unistd.h>
#include <stdlib.h>
#include <stdio.h>
#include <time.h>
#include "perso.h"
#include "my_libe.h"

char		*readLine()
{
  ssize_t	ret;
  char		*buff;

  if ((buff = malloc(sizeof(*buff) * (50 + 1))) == NULL)
    return (NULL);
  if ((ret = read(0, buff, 50)) > 0)
    {
      buff[ret - 1] = '\0';
      return (buff);
    }
  buff[0] = '\0';
  return (buff);
}

int	init(int ac, char **av)
{
  if (ac == 3)
    {
      if ((my_strcmp(av[1], "-n") == 0) && (av[2] != NULL))
	{
	  my_putstr(CLRSCR);
	  invoke(av[2]);
	}
      else
	{
	  my_putstr("To have a chance to fight for Midgar, type : ");
	  my_putstr("./ragnarok -n <hero's name>\n");
	  return (-1);
	}
      return (0);
    }
  else
    {
      my_putstr("To have a chance to fight for Midgar, type : ");
      my_putstr("./ragnarok -n <hero's name>\n");
      return (-1);
    }
  return (0);
}

int	invoke(char *name)
{
  hero.name = name;
  hero.hp = 100;
  hero.mp = 30;
  monster.name = "rattata";
  monster.hp = 75;
  monster.mp = 20;
  return (0);
}

int	final(int game)
{
  sleep(2);
  if (game == 1)
    {
      my_putstr(CLRSCR);
      my_putstr("\n\n\n\n\n\t\t\t\t\t\t\tYOU WIN\n\n\n\n\n\n");
      my_putstr("\t\t\t\t\t\t\tThanks for playing our game.\n\n\n\n\n\n");
    }
  else
    {
      my_putstr(CLRSCR);
      my_putstr("\n\n\n\n\n\t\t\t\t\tOH, SO BAD! YOU LOOSE!\n\n\n\n\n\n");
      my_putstr("\t\t\t\t\t\t\tThanks for playing our game.\n\n\n\n\n\n");
    }
  return (0);
}

int	rand_3()
{
  srand(time(NULL));
  return (rand() % 3 + 1);
}
