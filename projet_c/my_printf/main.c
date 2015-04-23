/*
** main.c for main in /Users/aminefriaa/Desktop/my_printf/my_printf
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Mar  6 12:46:34 2015 FRIAA Amine
** Last update Fri Mar  6 15:25:36 2015 FRIAA Amine
*/

#include	<stdarg.h>
#include	<stdio.h>
#include	<stdlib.h>
#include	"my_printf.h"

int		main()
{
  my_printf("1 - une chaine\n");
  my_printf("2 - %s\n", "une autre chaine");
  my_printf("3 - %i\n", 42);
  my_printf("4 - %s %d %s%c", "avec", 4, "parametres", '\n');
  my_printf("5 - %o\n", 42);
  my_printf("6 - %u\n", 4200000000);
  my_printf("7 - %x\n", 42);
  my_printf("8 - %X\n", 42);
  my_printf("9 - %d%%\n", 42);
  my_printf("10 - %s\n", NULL);
  return (0);
}
