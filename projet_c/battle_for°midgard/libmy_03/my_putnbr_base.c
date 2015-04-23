/*
** my_putnbr_base.c for  in /home/friaa_a/piscine_c/libmy_02/libmy_02/libmy_02
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Mon Oct  6 11:16:46 2014 FRIAA Amine
** Last update Mon Oct  6 13:29:25 2014 FRIAA Amine
*/

int    my_putnbr_base(int nbr, char *base)
{
  if (nbr < 0)
    {
      nbr = nbr * -1;
      my_putchar('-');
    }
  if (nbr >= my_strlen(base) - 1)
    my_putnbr_base(nbr / my_strlen(base), base);
  my_putchar(base[nbr % my_strlen(base)]);
  return (nbr);
}
