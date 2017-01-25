<?php
function TablefromPost()
{
  # code...
if (0 == isset($_POST[title])) return false;
date_default_timezone_set('Europe/Moscow');
isset($_POST);
$loadtable=$_POST;
$loadtable[date]=time();
$loadtable[url]=__DIR__.'?news_id='.time();
return $loadtable;
}
function TabletoBD($table)
{
  mysqli_connect( ['localhost', 'root', '', $database, $port, $socket]);
}
 ?>
