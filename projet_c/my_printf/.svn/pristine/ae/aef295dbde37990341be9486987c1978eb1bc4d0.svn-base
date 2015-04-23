/*
** my_printf.h for my_printf in /Users/aminefriaa/Desktop/my_printf/my_printf
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Mar  6 14:28:28 2015 FRIAA Amine
** Last update Fri Mar  6 14:29:32 2015 FRIAA Amine
*/

#ifndef		__MY_PRINTF_H__
#define		__MY_PRINTF_H__

#include	<stdarg.h>

typedef	struct	s_printf
{
  char		op;
  int(*p) (va_list);
}	t_printf;

void		my_putchar(char c);
int		my_putstr(char *str);
void		my_putnbr(int nb);
int		print_char(va_list ap);
int		print_int(va_list ap);
int		fo(char f,va_list ap);
int		my_printf(char *, ...);
int		print_str(va_list ap);
int		print_oct(va_list ap);
void		my_putnbr_base(int nb, char *base);
void		my_putnbr_dec(unsigned int nb);
int		my_strlen(char *c);
int		print_dec(va_list ap);
int		print_hexmin(va_list ap);
int		print_hexamaj(va_list ap);

#endif
