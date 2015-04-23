##
## Makefile for  in /home/friaa_a/piscine_c/libmy_01/friaa_a/libmy_01
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Sat Oct  4 19:24:11 2014 FRIAA Amine
## Last update Wed Oct  8 13:34:14 2014 FRIAA Amine
##

CC =	 gcc

NAME =	 libmy.a

SRC =	my_aff_tab.c	\
	my_isneg.c	\
	my_put_nbr.c	\
	my_strcat.c	\
	my_strcpy.c	\
	my_strncat.c	\
	my_strncpy.c	\
	my_swap.c	\
	my_getnbr.c	\
	my_putchar.c	\
	my_putstr.c	\
	my_strcmp.c	\
	my_strlen.c	\
	my_strncmp.c	\
	my_strstr.c	\
	my_strdup.c	\
	my_putnbr_base.c	\
	my_str_to_wordtab.c

OBJ =	$(SRC:%.c=%.o)

RM =	rm -f

$(NAME):	$(OBJ)
		ar rc $(NAME) $(OBJ) 
		ranlib $(NAME)

all:	$(NAME)

clean:
	$(RM) $(OBJ)

fclean:		clean
		$(RM) $(NAME)

re:	fclean all