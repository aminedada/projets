#!/bin/sh
## nombre_hasard.sh for nbr_hasard in /home/friaa_a/projet/plusaumoin
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Mon Nov  3 10:56:11 2014 FRIAA Amine
## Last update Wed Nov  5 09:41:56 2014 FRIAA Amine
##
. ./menu.sh
echo -e "\033[1;32m Choisir un mode\033[0m"
echo -en "$> "
read opt

if [ $opt = 1 ]
then
    . ./facile.sh
fi
if [ $opt = 2 ]
then
    . ./normal.sh
fi
if [ $opt = 3 ]
then
    . ./hard.sh
fi
if [ $opt = 4 ]
then
    . ./extrem.sh
fi
if [ $opt = 5 ]
then
    . ./dieu.sh
fi
if [ $opt = "exit" ]
then
    exit
    echo "Bonne journee"
fi



