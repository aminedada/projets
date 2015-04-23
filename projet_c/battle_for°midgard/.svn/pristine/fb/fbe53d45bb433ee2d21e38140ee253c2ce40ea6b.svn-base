/*
** my_put_nbr.c for  in /home/friaa_a/piscine_c/libmy_01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Fri Oct  3 18:52:02 2014 FRIAA Amine
** Last update Fri Oct  3 18:52:54 2014 FRIAA Amine
*/

void    my_put_nbr(int nb)
{
  int   neg;

  neg = 0;
  if (nb < 0)
    {
      my_putchar('-');
      if (nb == -2147483648)
        {
          neg = 1;
          nb++;
        }
      nb = nb * -1;
    }
  if (nb >= 10)
    my_put_nbr(nb / 10);
  if (neg == 1)
    {
      neg = 0;
      my_putchar(nb % 10 + '1');
    }
  else
    my_putchar(nb % 10 + '0');
}
