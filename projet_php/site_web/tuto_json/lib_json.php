<?php
// lib_json.php for lib in /home/friaa_a/tuto_json
// 
// Made by FRIAA Amine
// Login   <friaa_a@etna-alternance.net>
// 
// Started on  Mon Nov 24 10:35:57 2014 FRIAA Amine
// Last update Tue Nov 25 10:18:57 2014 FRIAA Amine
//

function select_all($path)
{
  $table = file_get_contents($path);
  $user = json_decode($table);
  return $user;
}

function include_file($add_content,$path)
{
  $tab = select_all($path);
  $tab[] = $add_content;
  $tab1 = json_encode($tab);
  file_put_contents($path,$tab1);
}









?>