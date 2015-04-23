<?php
// commande2.php for commande2 in /home/friaa_a/piscine_php/MicroShell/friaa_a/include
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Fri Oct 17 09:45:48 2014 FRIAA Amine
// Last update Sat Oct 18 14:34:42 2014 FRIAA Amine
//

function commande_cat($params)
{
  $i = 1;
  
  while (isset($params[$i]))
    {
      if (file_exists($params[$i]) == false)
	echo ("cat.php: ".$params[$i].": No such file or directory\n");
      else if (is_dir($params[$i]) == true)
	echo ("cat.php: ".$params[$i].": Is a directory\n");
      else if (is_readable($params[$i]) == false)
	echo ("cat.php: ".$params[$i].": Permission denied\n");
      else if ((fopen($params[$i], 'r')) != false)
	{
	  $fd = fopen($params[$i], 'r');
	  $t = fread($fd, 10);
	  rewind($fd);

	  if ($t != false)
	    echo fread($fd, filesize($params[$i]))."\n";
	  fclose($fd);
	}
      else
	echo ("cat.php:".$params.": Invalid arguments\n");
      $i = $i + 1;
    }
}
function commande_ls($params)
{
  if (isset($params[1]) == NULL)
    $params[1] = getcwd();
  else if (file_exists($params[1]) == false)
    echo $params[0],": ",$params[1],": No such file or directory\n";
  else if (is_dir($params[1]) == false)
    echo $params[0],": ",$params[1],": Not a directory\n";
  
  $v1 = getcwd();
  chdir($params[1]);
  $v2 = getcwd();
  
  $dir = opendir($v2);
  $file = readdir($dir);

  while ($file = readdir($dir))
    {
      if ($file[0] != '.')
        {
          if (is_dir($file) == true)
            echo "$file/\n";
          if (is_file($file) == true)
            echo "$file*\n";
          if (is_link($file) == true)
            echo "$file@\n";
        }
    }
  closedir($dir);
  chdir($v1);
}
function commande_setenv($params)
{
  if (isset($params[1]) && isset($params[2]))
    $_ENV[$params[1]] = $params[2];
  else
    echo "setenv: Invalid arguments\n";
}
?>