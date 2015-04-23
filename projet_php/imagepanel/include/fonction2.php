<?php
// fonction2.php for fonction2 in /home/friaaamine/projet/friaa_a/include
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Tue Oct 28 12:36:32 2014 FRIAA Amine
// Last update Thu Oct 30 11:41:34 2014 FRIAA Amine
//
function tri($test)
{
  natcasesort($test);
  return ($test);
}

function localpath1($str)
{
  $str = $str."\"";
  preg_match("#(.*)\/(?:[^\/]*)[\"\' ]#", $str, $array);
  return $array[1]."/";
}
