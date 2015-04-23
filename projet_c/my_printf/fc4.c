/*
** fc4.c for fonction4 in /Users/aminefriaa/Desktop/my_printf/my_printf
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Mar  6 14:25:33 2015 FRIAA Amine
** Last update Fri Mar  6 14:26:18 2015 FRIAA Amine
*/

#include	<stdarg.h>
#include	<stdio.h>
#include	<stdlib.h>
#include	"my_printf.h"

int		print_hexmin(va_list ap)
{
  int		i;
  char		*base;

  i = va_arg(ap, int );
  base = "0123456789abcdef";
  my_putnbr_base(i, base);
  return (0);
}

int		print_hexamaj(va_list ap)
{
  int		i;
  char		*base;

  i = va_arg(ap, int );
  base = "0123456789ABCDF";
  my_putnbr_base(i, base);
  return (0);
}
