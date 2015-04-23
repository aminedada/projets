#!/bin/sh
## menu6.sh for menu6 in /home/friaa_a/projet/plusoumoins
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Wed Nov  5 09:35:31 2014 FRIAA Amine
## Last update Wed Nov  5 16:54:41 2014 FRIAA Amine
##

echo -e "\033[31;5m░█▀▀█ ─█▀▀█ ░█─── ▀▀█▀▀ ░█▀▀█ ▀█▀ ░█▄─░█ ░█▀▀█ ░█─░█ ░█▀▀▀ 
░█▀▀▄ ░█▄▄█ ░█─── ─░█── ░█▄▄▀ ░█─ ░█░█░█ ░█─▄▄ ░█─░█ ░█▀▀▀ 
░█▄▄█ ░█─░█ ░█▄▄█ ─░█── ░█─░█ ▄█▄ ░█──▀█ ░█▄▄█ ─▀▄▄▀ ░█▄▄▄ \033[0m"
echo -e "****************************1:facile**********************************"
echo -e "****************************2:normal**********************************"
echo -e "****************************3:hard************************************"
echo -e "****************************4:extrem**********************************"
echo -e "****************************exit:sortie du jeu************************"
echo -en "$> "
read opt
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
if [ $opt = 1 ]
then
    . ./facile.sh
fi
if [ $opt = "exit" ]
then
    echo -en "Bonne journee\n"
    exit
fi