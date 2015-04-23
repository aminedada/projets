/*
** my_printf.c for my_printf in /Users/aminefriaa/Desktop/my_printf/my_printf
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Mar  6 14:27:01 2015 FRIAA Amine
** Last update Fri Mar  6 15:25:24 2015 FRIAA Amine
*/

#include	<stdarg.h>
#include	<stdio.h>
#include	<stdlib.h>
#include	"my_printf.h"

t_printf	g_ptr[10]=
  {
    {'c' , &print_char},
    {'d' , &print_int},
    {'i' , &print_int},
    {'s' , &print_str},
    {'o' , &print_oct},
    {'u' , &print_dec},
    {'x' , &print_hexmin},
    {'X' , &print_hexamaj},
    {'\0', NULL},
  };

int		fo(char f,va_list ap)
{
  int		i;

  for (i = 0 ;g_ptr[i].op != '\0' ;i++)
    {
      if (g_ptr[i].op == f)
	{
          g_ptr[i].p(ap);
	}
    }
  return (0);
}

int		my_printf(char *str, ...)
{
  int		i;
  va_list	ap;
  
  va_start(ap, str);
  i = 0;
  while (str[i])
    {
      if (str[i] == '%')
	{
          i++;
          if (str[i] == '%')
	    {
	      my_putchar('%');
	      i++;
	      while (str[i])
		{
		  my_putchar(str[i]);
		  i++;
		}
	    }
	  else
	    {
	      fo (str[i], ap);
	      i++;
	    }
	}
      else
	{
	  my_putchar(str[i]);
	  i++;
	}
    }
  return (0);
}
