<?php
// fonction.php for fonction in /home/friaaamine/projet/friaa_a/include
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Tue Oct 28 11:14:46 2014 FRIAA Amine
// Last update Thu Oct 30 10:37:31 2014 FRIAA Amine
//
function make_panelpng($test, $path, $arv, $arc)
{
  $opt = checkoptions();
  $image = imagecreatetruecolor(800, 600);
  $larg = 0;
  $hauteur = 0;
  for ($n = 0; $test[$n] && $n < 30; $n++)
    {
      $var = "\"".$test[$n]."\"";
      preg_match("#\/([^\/]*)[\"\' ]#", $var, $array);
      if (check_img_src($path) == 2)
        {
          $pas = localpath1($path);
          $test[$n] = $pas.$test[$n];
        }
      else if (check_img_src($test[$n]) == 3)
	$test[$n] = $path.$test[$n];
      if (check_type($test[$n]) == 1)
        {
          $image2 = imagecreatefromjpeg($test[$n]);
	  if (isset($opt["N"]) && $opt["N"] == TRUE)
	    $blanc = imagecolorallocate($image2,255,255,255);
          imagecopyresampled($image, $image2, $larg, $hauteur, 0, 0,
			     imagesx($image) / 10, imagesy($image) / 10,
			     imagesx($image2), imagesy($image2));
	  if (isset($opt["N"]) && $opt["N"] == TRUE)
	    imagestring($image, 3, $larg, $hauteur, $array[1], $blanc);
	}
      else if (check_type($test[$n]) == 2)
        {
          $image2 = imagecreatefromgif($test[$n]);
	  if (isset($opt["N"]) && $opt["N"] == TRUE)
	    $blanc = imagecolorallocate($image2,255,255,255);
          imagecopyresampled($image, $image2, $larg, $hauteur, 0, 0, imagesx($image) / 10,
			     imagesy($image) / 10, imagesx($image2), imagesy($image2));
          if (isset($opt["N"]) && $opt["N"] == TRUE)
	    imagestring($image, 3, $larg, $hauteur, $array[1], $blanc);
        }
      else if (check_type($test[$n]) == 3)
        {
          $image2 = imagecreatefrompng($test[$n]);
	  if (isset($opt["N"]) && $opt["N"] == TRUE)
	    $blanc = imagecolorallocate($image2,255,255,255);
          imagecopyresampled($image, $image2, $larg, $hauteur, 0, 0,
			     imagesx($image) / 10, imagesy($image) / 10,
			     imagesx($image2), imagesy($image2));
	  if (isset($opt["N"]) && $opt["N"] == TRUE)
	    imagestring($image, 3, $larg, $hauteur, $array[1], $blanc);
	}
      if ($larg == imagesx($image))
        {
          $larg = 0;
          $hauteur = $hauteur + (imagesy($image) / 10);
        }
      $larg = $larg + (imagesx($image) / 10);
    }
  imagepng($image, $arv[$arc - 1].".png");
}
