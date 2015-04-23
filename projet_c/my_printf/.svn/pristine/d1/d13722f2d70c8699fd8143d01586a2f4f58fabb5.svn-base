##
## Makefile for Makefile in /Users/aminefriaa/Desktop/my_printf/my_printf
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Fri Mar  6 14:29:53 2015 FRIAA Amine
## Last update Fri Mar  6 14:31:45 2015 FRIAA Amine
##

LIBSTA	=	libmy_printf_`uname -m`-`uname -s`.a

LIBDYN	=	libmy_printf_`uname -m`-`uname -s`.so

NAME	=	my_printf

CC	=	gcc

SRC	=	fc1.c\
		fc2.c\
		fc3.c\
		fc4.c\
		my_printf.c\
		main.c

OBJ	=	$(SRC:.c=.o)


CFLAGS	=	-W -Wall -Werror -ansi -pedantic -I.

RM	=	rm -f

all	:	$(NAME) my_printf_static my_printf_dynamic

$(NAME)	:	$(OBJ)
		$(CC) $(OBJ) -o $(NAME)

my_printf_dynamic :	$(OBJ)
			$(CC) -shared $(OBJ) -o $(LIBDYN)

my_printf_static :	$(OBJ)
			ar -rc $(LIBSTA) $(OBJ)
			ranlib $(LIBSTA)

clean	:
		$(RM) $(OBJ)
		$(RM) *~

fclean	:	clean
		$(RM) $(LIBSTA) $(LIBDYN)


re	:	fclean all

.PHONY	:	clean fclean all re 