/*
** readline.c for  in /home/pakel_l/projet/Octocat/pakel_l
** 
** Made by PAKEL Louis
** Login   <pakel_l@etna-alternance.net>
** 
** Started on  Thu Nov 13 14:24:36 2014 PAKEL Louis
** Last update Thu Nov 13 14:24:51 2014 PAKEL Louis
*/

#include <unistd.h>
#include <stdio.h>
#include <stdlib.h>

char            *readLine()
{
  ssize_t       ret;
  char          *buff;

  if ((buff = malloc(sizeof(*buff) * (50 + 1))) == NULL)
    return (NULL);
  if ((ret = read(0, buff, 50)) > 1)
    {
      buff[ret - 1] = '\0';
      return (buff);
    }
  buff[0] = '\0';
  return (buff);
}
