#!/bin/sh
## menu_perdu.sh for perdu in /home/friaa_a/projet/plusoumoins
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Wed Nov  5 16:43:49 2014 FRIAA Amine
## Last update Wed Nov  5 16:48:30 2014 FRIAA Amine
##
echo -e "\033[33m****************************1:facile********************************"
echo -e "****************************2:normale*******************************"
echo -e "****************************3:hard**********************************"
echo -e "****************************4:extrem********************************"
echo -e "****************************5:dieu**********************************"
echo -e "****************************exit:sortie du jeu**********************"
echo -e "****************************retour:menu*****************************\033[0m"
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