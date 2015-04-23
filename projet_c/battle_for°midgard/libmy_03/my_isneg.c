/*
** my_isgned.c for my_isneg in /home/friaa_a/piscine_c/jour01
** 
** Made by FRIAA Amine
** Login   <friaa_a@etna-alternance.net>
** 
** Started on  Mon Sep 29 18:32:06 2014 FRIAA Amine
** Last update Mon Sep 29 22:52:47 2014 FRIAA Amine
*/

void	 my_putchar(char c);

int	 my_isneg(int n)
{
  if (n < 0)
    {
      return(0) ;
    }  
  else if (n >= 0)
    {  
      return(1);
    }
  return (0);
}



