/*
** fc2.c for fonction2 in /Users/aminefriaa/Desktop/my_printf/my_printf
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Mar  6 14:23:49 2015 FRIAA Amine
** Last update Fri Mar  6 14:24:33 2015 FRIAA Amine
*/

#include	<stdarg.h>
#include	<stdio.h>
#include	<stdlib.h>
#include	"my_printf.h"

int		print_char(va_list ap)
{
  char		c;

  c = va_arg (ap, int);
  my_putchar(c);
  return (0);
}

int		print_str(va_list ap)
{
  char		*str;

  str = va_arg (ap, char *);
  my_putstr(str);
  return (0);
}

int		print_int(va_list ap)
{
  int		i;

  i = va_arg(ap,int);
  my_putnbr(i);
  return (0);
}

int		print_oct(va_list ap)
{
  unsigned int	nb;
  char		*base;

  nb = va_arg(ap, unsigned int);
  base = "01234567";
  my_putnbr_base(nb, base);
  return (0);
}

int		print_dec(va_list ap)
{
  unsigned int	i;

  i = va_arg(ap, unsigned int);
  my_putnbr_dec(i);
  return (0);
}
