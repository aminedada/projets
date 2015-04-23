/*
** attack.c for  in /home/friaa_a/piscine_c/projet2/jalet_y/quete_1
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct 10 17:34:13 2014 FRIAA Amine
** Last update Sat Oct 11 11:45:02 2014 JALET Yvane
*/

#include "my_libe.h"
#include "perso.h"


int     use_attack()
{
  monster.hp -= 7;
  my_putstr("\033[36m");
  my_putstr(hero.name);
  my_putstr("\033[0m use attack.\n\033[33m");
  my_putstr(monster.name);
  my_putstr("\033[0m lose \033[31m7 HP\033[0m.\n");
  monster_tr();
  return (0);
}

int     use_slash()
{
  monster.hp -= 10;
  hero.hp -= 2;
  my_putstr("\033[36m");
  my_putstr(hero.name);
  my_putstr("\033[0m use slash and lose \033[31m2 HP\033[0m.\n\033[33m");
  my_putstr(monster.name);
  my_putstr("\033[0m lose \033[31m10 HP\033[0m.\n");
  monster_tr();
  return (0);
}

int     use_fire()
{
  monster.hp -= 10;
  hero.mp -= 3;
  my_putstr("\033[36m");
  my_putstr(hero.name);
  my_putstr("\033[0m use fire and lose \033[34m3 MP\033[0m.\n\033[33m");
  my_putstr(monster.name);
  my_putstr("\033[0m lose \033[31m10 HP\033[0m.\n");
  monster_tr();
  return (0);
}

int     use_thunder()
{
  hero.mp -= 5;
  monster.hp -= 15;
  my_putstr("\033[36m");
  my_putstr(hero.name);
  my_putstr("\033[0m use thunder and lose \033[34m5 MP\033[0m.\n\033[33m");
  my_putstr(monster.name);
  my_putstr("\033[0m lose \033[31m15 HP\033[0m.\n");
  monster_tr();
  return (0);
}
