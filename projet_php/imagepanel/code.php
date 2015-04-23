<?php
// code.php for code in /home/friaaamine/projet/friaa_a
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Thu Oct 30 10:29:27 2014 FRIAA Amine
// Last update Fri Oct 31 10:25:00 2014 FRIAA Amine
//

function recup_code_img($str)
{
  $buf = file_get_contents($str);
  preg_match_all('#<img .*src=(?:"|\')(.+)(?:"|\').*>#Usm',$buf, $array);
  return $array[1];
}