/*
** my_getnbr.c for  in /home/friaa_a/piscine_c/libmy_01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct  3 19:00:01 2014 FRIAA Amine
** Last update Fri Oct  3 19:03:18 2014 FRIAA Amine
*/

int	my_getnbr(char *str)
{
  int	count;
  int	s;
  int	nbr;

  s = 1;
  count = 0;
  while (str[count] != '\0' && (str[count] == '+' || str[count] == '-'))
    {
      if (str[count] == '-')
        {
          s = s * -1;
        }
      count = count + 1;
    }
  str = str + count;
  nbr = 0;
  count = 0;
  while (str[count] >= '0' && str[count] <= '9')
    {
      nbr = nbr * 10;
      nbr = nbr - (str[count] - '0');
      count = count + 1;
    }
  return (nbr * s * -1);
}
