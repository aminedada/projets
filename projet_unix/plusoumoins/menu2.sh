#!/bin/sh
## menu2.sh for menu2 in /home/friaa_a/projet/plusoumoins
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Wed Nov  5 09:19:54 2014 FRIAA Amine
## Last update Wed Nov  5 16:39:30 2014 FRIAA Amine
##
echo -e "****************************2:normale*******************************"
echo -e "****************************3:hard**********************************"
echo -e "****************************4:extrem********************************"
echo -e "****************************5:dieu**********************************"
echo -e "****************************exit:sorti du jeu***********************\033[0m"
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
if [ $opt = 5 ]
then
    . ./dieu.sh
fi
if [ $opt = "exit" ]
then
    echo -en "Bonne journee\n"
    exit
fi