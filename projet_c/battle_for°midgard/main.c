/*
** main.c for  in /home/friaa_a/piscine_c/projet2/jalet_y/quete_1
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct 10 14:54:07 2014 FRIAA Amine
** Last update Sat Oct 11 12:52:14 2014 JALET Yvane
*/

#include "my_libe.h"
#include "perso.h"
#include <unistd.h>
#include <time.h>

void	ragnarok_srceen();	

int	main(int ac, char **av)
{
  char	*act;
  
  ragnarok_srceen();
  if(init(ac, av) == -1)
    return (1);
  while (1)
    {
      my_putstr("Your turn> ");
      act = readLine();
      if (select_act(act) == -1)
	return (1);
      if ((hero.hp < 1) || (monster.hp < 1))
	return (1);
    }
  return (0);
}
