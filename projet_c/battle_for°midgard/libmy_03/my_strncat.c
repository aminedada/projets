/*
** my_strncat.c for  in /home/friaa_a/piscine_c/libmy_01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct  3 20:15:01 2014 FRIAA Amine
** Last update Fri Oct  3 20:15:13 2014 FRIAA Amine
*/

char    *my_strncat(char *dest, char *src, int nb)
{
  int   i;
  int   j;

  j = 0;
  i = my_strlen(dest);
  while (src[j] && i < nb)
    {
      dest[i] = src[j];
      i = i + 1;
      j = j + 1;
    }
  dest[i] = '\0';
  return (dest);
}
