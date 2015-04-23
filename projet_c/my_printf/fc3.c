/*
** fc3.c for fonction3 in /Users/aminefriaa/Desktop/my_printf/my_printf
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Mar  6 14:24:54 2015 FRIAA Amine
** Last update Fri Mar  6 14:25:12 2015 FRIAA Amine
*/

#include	<stdarg.h>
#include	<stdio.h>
#include	<stdlib.h>
#include	"my_printf.h"

void		my_putnbr_dec(unsigned int nb)
{
  if (nb >= 10)
    {
      my_putnbr(nb / 10);
      my_putnbr(nb % 10);
    }
  else
    my_putchar(nb + 48);
}
