/*
** my_putstr.c for  in /home/friaa_a/piscine_c/libmy_01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct  3 18:57:50 2014 FRIAA Amine
** Last update Sat Oct 11 09:43:21 2014 JALET Yvane
*/
#include <unistd.h>

void my_putchar(char c);

void	my_putstr(char *str)
{
  int	i;

  i = 0;
  while (str[i] != '\0')
    {
      my_putchar(str[i]);
      i++;
    }
}
