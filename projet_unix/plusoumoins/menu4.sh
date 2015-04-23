#!/bin/sh
## menu4.sh for menu3 in /home/friaa_a/projet/plusoumoins
## 
## Made by FRIAA Amine
## Login   <friaa_a@etna-alternance.net>
## 
## Started on  Wed Nov  5 09:27:13 2014 FRIAA Amine
## Last update Wed Nov  5 16:39:47 2014 FRIAA Amine
##
 echo -e "****************************1:facile********************************"
 echo -e "****************************2:normal********************************"
 echo -e "****************************4:extrem********************************"
 echo -e "****************************5:dieu**********************************"
 echo -e "****************************exit:sortie du jeu**********************\033[0m"
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