/*
** attack_m.c for  in /home/friaa_a/piscine_c/projet2/jalet_y/quete_1
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct 10 17:55:40 2014 FRIAA Amine
** Last update Sat Oct 11 13:15:55 2014 JALET Yvane
*/

#include "my_libe.h"
#include "perso.h"

int	use_bite()
{
  hero.hp -= 6;
  my_putstr("\033[33m");
  my_putstr(monster.name);
  my_putstr("\033[0m use bite.\n\033[36m");
  my_putstr(hero.name);
  my_putstr("\033[0m lose \033[31m6 PV\033[0m.\n\n");
  return (0);
}

int	use_earthquake()
{
  monster.hp -= 3;
  hero.hp -= 15;
  my_putstr("\033[33m");
  my_putstr(monster.name);
  my_putstr("\033[0m use earthquake and lose \033[31m3 PV\033[0m.\n\033[36m");
  my_putstr(hero.name);
  my_putstr("\033[0m lose \033[31m15 PV\033[0m.\n\n");
  return (0);
}

int     use_doom()
{
  if (monster.mp > 4)
    {
      monster.mp -= 5;
      hero.hp -= 11;
      my_putstr("\033[33m");
      my_putstr(monster.name);
      my_putstr("\033[0m use doom and lose \033[34m5 Pm\033[0m.\n\033[36m");
      my_putstr(hero.name);
      my_putstr("\033[0m lose \033[31m11 PV\033[0m.\n\n");
    }
  else
    {
      my_putstr("\033[33m");
      my_putstr(monster.name);
      my_putstr("\033[0m has not enough \033[34m PM\033[0m to use doom.\n");
    }
  return (0);
}

int	monster_tr()
{
  int	rnd;

  rnd = rand_3();
  if (rnd == 1)
    use_bite();
  else if (rnd == 2)
    use_earthquake();
  else if (rnd == 3)
    use_doom();
  return (0);
}
