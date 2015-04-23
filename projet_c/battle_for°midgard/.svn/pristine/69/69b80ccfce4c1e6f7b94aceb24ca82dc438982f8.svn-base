/*
** my_strdup.c for  in /home/friaa_a/piscine_c/jour08/libmy_01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Tue Oct  7 19:46:23 2014 FRIAA Amine
** Last update Tue Oct  7 19:51:42 2014 FRIAA Amine
*/

#include <stdlib.h>

void	my_putchar(char c);
int	my_strlen(char *str);
char	*my_strcpy(char *dest, char *src);
void	my_putstr(char *str);

char	*my_strdup(char *str)
{
  char	*cop;
  
  cop = (char *)malloc(sizeof(char) * my_strlen(str) + 1);
  cop = my_strcpy(cop, str);
  cop[my_strlen(str)] = 0;
  return (cop);
}
