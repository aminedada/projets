/*
** my_putchar.c for  in /home/friaa_a/piscine_c/libmy_01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct  3 18:30:09 2014 FRIAA Amine
** Last update Sat Oct 11 09:36:16 2014 JALET Yvane
*/
#include <unistd.h>

void	my_putchar(char c)
{
  write(1, &c, 1);
}
