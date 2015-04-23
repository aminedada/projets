##
## Makefile for  in /home/pakel_l/projet/Octocat/pakel_l
## 
## Made by PAKEL Louis
## Login   <pakel_l@etna-alternance.net>
## 
## Started on  Wed Nov 12 17:09:11 2014 PAKEL Louis
## Last update Fri Nov 14 17:21:17 2014 FRIAA Amine
##

CC	=	gcc

NAME	=	Octocat

SRC	=	main.c		\
		play.c		\
		play2.c		\
		affiche.c	\
		base.c		\
		menu.c		\
		actions.c	\
		readline.c	\
		affichage.c	\
		my_putstr.c	\
		my_putchar.c	\
		my_strcmp.c	\
		help.c		

OBJ	=	$(SRC:%.c=%.o)

CFLAGS	=	-W -Wall -Werror

RM	=	rm	-f

$(NAME):	$(OBJ)
		$(CC) $(OBJ) -o $(NAME)

all:		$(NAME)

clean:
		rm -f	$(OBJ)

fclean:		clean
		$(RM)	$(NAME)

re:		fclean	 all