<?php
// imagepanel2.php for imagepanel2 in /home/friaaamine/projet/friaa_a
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Thu Oct 30 10:27:07 2014 FRIAA Amine
// Last update Fri Oct 31 10:51:02 2014 FRIAA Amine
//
function check_exist($test)
{
  $site = $test;
  $file = fopen($site, 'r');
  if ($file) 
   return (1);
  else
    return (0);
}
/*    function test_image($test)
{
  $ch= curl_init($test); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // recuperer dans une chaine de caracteres
  $res=curl_exec($ch); // $res : la chaine en question
  $img_existe = true;
  if (ereg('<title>404 Not Found</title>',$res)) 
    $img_existe = false;
  return $img_existe;
  
  
  }*/
function check_type($test)
{
  if (check_exist($test) == 1)
    {  
      if (exif_imagetype($test) == IMAGETYPE_JPEG)
	return (1);
      if (exif_imagetype($test) == IMAGETYPE_GIF)
	return (2);
      if (exif_imagetype($test) == IMAGETYPE_PNG)
	return (3);
    }
  else
    return 0;
  
}
function check_img_src($img)
{
  if (preg_match('#^http:.*#', $img, $array))
    return (1);
  else if (preg_match('#.html$#', $img, $array))
    return (2);
  else
    return (3);
}