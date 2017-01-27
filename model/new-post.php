<?php
require_once __DIR__.'/../functions/func.php';

function TablefromPost()
{
  if (empty($_POST)) return false;
  date_default_timezone_set('Europe/Moscow');
  $loadtable=$_POST;
  $loadtable[date]=time();
  $loadtable[url]='?news_id='.time();
  return $loadtable;
}
function TabletoBD($t)
{
  $query="INSERT INTO news(title, text, date, url) VALUES ('$t[title]', '$t[content]', '$t[date]', '$t[url]')";
  NewsDBquery($query);
  return true;
}
 ?>
