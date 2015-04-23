##
## Makefile for  in /home/friaa_a/piscine_c/projet2/jalet_y/quete_1
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Fri Oct 10 19:09:13 2014 FRIAA Amine
## Last update Sat Oct 11 09:28:34 2014 JALET Yvane
##

NAME	= ragnarok

CC	= gcc

SRCS	= $(wildcard *c)

OBJS	= $(SRCS:.c=.o)

CFLAGS	+= -W -Wall -ansi -pedantic -Werror

##LDFLAGS = -L. -lmy

RM	= rm -f


$(NAME):$(OBJS)
	$(CC) -o $(NAME) $(OBJS) ##$(LDFLAGS)

all:		$(NAME)

clean:
	$(RM) $(OBJS)

fclean:	clean
	$(RM) $(NAME)