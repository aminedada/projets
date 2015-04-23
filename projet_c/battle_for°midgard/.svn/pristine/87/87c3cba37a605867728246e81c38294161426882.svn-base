/*
** selection.c for  in /home/friaa_a/piscine_c/projet2/jalet_y/quete_1
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct 10 17:02:59 2014 FRIAA Amine
** Last update Sat Oct 11 13:05:54 2014 JALET Yvane
*/

#include "my_libe.h"
#include "perso.h"

int	select_act(char *act)
{
  if(my_strcmp(act, "attack") == 0)
    use_attack();
  if(my_strcmp(act, "slash") == 0)
    use_slash();
  if(my_strcmp(act, "fire") == 0)
    use_fire();
  if(my_strcmp(act, "thunder") == 0)
    use_thunder();
  if(my_strcmp(act, "libra") == 0)
    use_libra();
  if(my_strcmp(act, "stat") == 0)
    use_stat();
  if(my_strcmp(act, "help") == 0)
    help();
  if(my_strcmp(act, "quit") == 0)
    return (-1);
  if (monster.hp <= 0)
    final(1);
  if (hero.hp <= 0)
    final(0);
  return (0);
}
