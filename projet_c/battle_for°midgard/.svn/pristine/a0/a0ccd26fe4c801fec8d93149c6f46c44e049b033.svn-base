/*
** my_strncmp.c for  in /home/friaa_a/piscine_c/libmy_01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct  3 20:13:28 2014 FRIAA Amine
** Last update Fri Oct  3 20:13:33 2014 FRIAA Amine
*/

int     my_strncmp(char *s1, char *s2, int nb)
{
  int   i;

  i = 0;
  while ((s1[i] || s2[i]) && i < nb)
    {
      if (s1[i] < s2[i])
        return (-1);
      if (s1[i] > s2[i])
        return (1);
      i = i + 1;
    }
  if ((s1[i] < s2[i]) && i < nb)
    return (-1);
  if ((s1[i] > s2[i]) && i < nb)
    return (1);
  return (0);
}
