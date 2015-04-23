/*
** my_putstr.c for  in /home/friaa_a/piscine_c/libmy_01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct  3 18:57:50 2014 FRIAA Amine
** Last update Fri Oct  3 18:59:00 2014 FRIAA Amine
*/

void	my_putstr(char *str)
{
  char	i;

  i = 0;
  while (str[i] != '\0')
    {
      my_putchar(str[i]);
      i++;
    }
}
