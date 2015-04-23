#!/bin/sh
## dieu.sh for dieu in /home/friaa_a/projet/plusoumoins
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Tue Nov  4 11:30:17 2014 FRIAA Amine
## Last update Wed Nov  5 16:49:50 2014 FRIAA Amine
##
echo -en "Vous avez choisis le mode dieu\n"
. ./mort.sh
echo -en "C'est compris entre 0 et 1500\n"
n=$[($RANDOM % ($[1500 - 0] + 1)) + 0]
echo -en "Vous avez 3 chances\n"
echo -en "$> "
read nb
m=$sec
i=3
while [ $i -ge 1 ]
do
     if [[ $nb = "retour" ]];
    then
	 . ./menu6.sh
    fi
    if [[ $nb = "exit" ]];
    then
        echo -en "Bonne journee\n"
        exit
    fi
    if [[ $nb =~ ^[-+]?[0-9]+$ ]]
    then
	if [[ $nb -le 1500 ]] && [[ $nb -ge 0 ]]
	then
	    if [[ $nb -lt $n ]];
            then
		echo "C'est plus ! Vous avez encore $i chances !"
		i=$[i - 1]
	    fi
	    if [[ $nb -gt $n ]];
            then
		echo "C'est moins ! Vous avez encore $i chances !"
		i=$[i - 1]
            fi
	    if [[ $nb -eq $n ]];
	    then
               	echo 'Mashallah ta vie'
                . ./guy-fawkes.sh
		. ./menu6.sh
	    fi
	else
            echo "C'est pas bon !!!!!!!"
	fi
    else
        echo "C'est pas bon !!!!!!!!!!!!!"
    fi
    echo -en "$> "
    read nb
done
echo -e "\033[35m▒█▀▀█ ░█▀▀█ ▒█▀▄▀█ ▒█▀▀▀ 　 ▒█▀▀▀█ ▒█░░▒█ ▒█▀▀▀ ▒█▀▀█ 
▒█░▄▄ ▒█▄▄█ ▒█▒█▒█ ▒█▀▀▀ 　 ▒█░░▒█ ░▒█▒█░ ▒█▀▀▀ ▒█▄▄▀ 
▒█▄▄█ ▒█░▒█ ▒█░░▒█ ▒█▄▄▄ 　 ▒█▄▄▄█ ░░▀▄▀░ ▒█▄▄▄ ▒█░▒█\033[0m"
. ./menu_perdu.sh