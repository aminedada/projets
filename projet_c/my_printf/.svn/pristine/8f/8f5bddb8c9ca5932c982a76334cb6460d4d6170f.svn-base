/*
** fc1.c for fonction1 in /Users/aminefriaa/Desktop/my_printf/my_printf
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Mar  6 14:20:34 2015 FRIAA Amine
** Last update Fri Mar  6 14:23:12 2015 FRIAA Amine
*/

#include	<stdarg.h>
#include	<unistd.h>
#include	<stdio.h>
#include	<stdlib.h>
#include	"my_printf.h"

void		my_putchar(char c)
{
  write(1, &c, 1);
}

int		my_putstr(char *str)
{
  int		i;

  i = 0;
  while (str[i] != '\0')
    {
      my_putchar(str[i]);
      i = i + 1;
    }
  return (0);
}

void		my_putnbr(int nb)
{
  if (nb >= 10)
    {
      my_putnbr(nb / 10);
      my_putnbr(nb % 10);
    }
  else
    my_putchar(nb + 48);
}

int		my_strlen(char *str)
{
  int		i;

  i = 0;
  while (str[i] != '\0')
    i++;
  return (i);
}

void		my_putnbr_base(int nb, char *base)
{
  int		res;
  int		div;
  int		t_base;

  t_base = my_strlen(base);
  if (nb < 0)
    {
      my_putchar('-');
      nb = -nb;
    }
  div = 1;
  while ((nb / div) >= t_base)
    div = div * t_base;
  while (div > 0)
    {
      res = (nb /div) % t_base;
      my_putchar(base[res]);
      div = div / t_base;
    }
}
