/*
** actions.c for  in /home/friaa_a/piscine_c/projet2/jalet_y/quete_1
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct 10 17:19:38 2014 FRIAA Amine
** Last update Sat Oct 11 13:41:54 2014 JALET Yvane
*/

#include "perso.h"
#include "my_libe.h"


int	use_stat()
{
  my_putstr("Hero :\033[36m ");
  my_putstr(hero.name);
  my_putstr("\n\033[0m \033[31m HP : ");
  my_put_nbr(hero.hp);
  my_putstr("\033[0m\n \033[34m MP : ");
  my_put_nbr(hero.mp);
  my_putstr("\033[0m\n\n");
  return (0);
}

int	use_libra()
{
  hero.mp -= 1;
  my_putstr("Monster :\033[33m ");
  my_putstr(monster.name);
  my_putstr("\n\033[0m \033[31m HP : ");
  my_put_nbr(monster.hp);
  my_putstr("\033[0m\n \033[34m MP : ");
  my_put_nbr(monster.mp);
  my_putstr("\033[0m\n\n");
  my_putstr("\033[0m use libra and lose \033[34m1 MP\033[0m.\n\033[33m");
  monster_tr();
  return (0);
}

int	help()
{
  my_putstr("To complet the quest, here you have the list of commands:\n");
  my_putstr("---/--\033[1;34mhelp\033[0m-----| Shows the differents commands.\n");
  my_putstr("--/---\033[34mstat\033[0m-----| Shows ");
  my_putstr(hero.name);
  my_putstr(" (your Hero) stats.\n");
  my_putstr("-/----\033[34mquit\033[0m-----| Quit the game, YOU LOOSE!!\n");
  my_putstr("/-----\033[34mlibra\033[0m----| Shows ");
  my_putstr(monster.name);
  my_putstr(" (your Enemy) stat.\n");
  my_putstr("\\-----\033[34mattack\033[0m---| Inflicts \033[31m-7 PV\033[0m to ");
  my_putstr(monster.name);
  my_putstr(".\n");
  my_putstr("-\\----\033[34mslash\033[0m----| Inflicts \033[31m-10 PV\033[0m to your enemy. But you loose \033[31m2 PV\033[0m.\n");
  my_putstr("--\\---\033[34mfire\033[0m-----| Inflicts \033[31m-10 PV\033[0m to your enemy. But you loose \033[34m3 PM\033[0m.\n");
  my_putstr("---\\--\033[34mthunder\033[0m--| Inflicts \033[31m-15 PV\033[0m to your enemy. But you loose \033[34m5 PM\033[0m.\n");
  return (0);
}
