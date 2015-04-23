#!/usr/bin/env php
<?php
// imagepanel.php for imagepanel in /home/friaaamine/projet/friaa_a
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Tue Oct 28 11:14:06 2014 FRIAA Amine
// Last update Thu Oct 30 15:44:14 2014 FRIAA Amine
//

require_once("./include/fonction.php");
require_once("./include/fonction2.php");
require_once("./include/fonction3.php");
require_once("./include/fonction4.php");
require_once("./imagepanel2.php");
require_once("./code.php");

/*check_type($test);
  check_img_src($img);*/

function checkoptions()
{
  $options = getopt("gjlnNps");
  $n = 0;
  if ($options == NULL)
    echo "Use a valide option (-gjlnNps)\n";
  else
    {
      if (array_key_exists("g" ,$options))
        $opt["g"] = TRUE;
      if (array_key_exists("j", $options))
        $opt["j"] = TRUE;
      if (array_key_exists("l", $options))
        $opt["l"] = TRUE;
      if (array_key_exists("n", $options))
        $opt["n"] = TRUE;
      if (array_key_exists("N", $options))
        $opt["N"] = TRUE;
      if (array_key_exists("p", $options))
        $opt["p"] = TRUE;
      if (array_key_exists("s", $options))
	$opt["s"] = TRUE;
      return ($opt);
    }
}
if ($argc < 4 || $argc > 5)
  {
    echo "Error : imagepanel use [options] lien1 base\n";
    return (0);
  }
$test1 = ($argv[2]);
$test = recup_code_img($test1);
echo count($test)." images trouvees.\n";
$opt = checkoptions();
if (isset($opt["g"]) && $opt["g"] == TRUE)
  make_panelgif($test, $test1, $argv, $argc);
if (isset($opt["j"]) && $opt["j"] == TRUE)
  make_paneljpeg($test, $test1, $argv, $argc);
if (isset($opt["p"]) && $opt["p"] == TRUE)
  make_panelpng($test, $test1, $argv, $argc);




