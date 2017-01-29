<?php
require __DIR__.'/../functions/func.php';


function NewsgetList()
{
  $query = ConnectDBNews('SELECT * FROM news ORDER BY date DESC');
  while ($row = mysqli_fetch_assoc($query)) {
    $table[] = $row;
  }

  return $table;
}


function NewsTableDB()
{
  $query = ConnectDBNews('SELECT * FROM news');
  while ($row = mysqli_fetch_assoc($query)) {
    $table[] = $row;
  }
  DisconnectDBNews();
  return $table;
}

function NewsById($date)
{
  $query = ConnectDBNews("SELECT title, text, date FROM news WHERE date=$date");
  $row = mysqli_fetch_assoc($query);
  DisconnectDBNews();
  return $row;
}

function CreateLoadTable()
{
  date_default_timezone_set('Europe/Moscow');
  $loadtable=$_POST;
  $loadtable[date]=time();
  $loadtable[url]='?news_id='.time();
  return $loadtable;
}

function LoadTableBD($t)
{
  $query="INSERT INTO news(title, text, date, url) VALUES ('$t[title]', '$t[content]', '$t[date]', '$t[url]')";
  NewsDBquery($query);
  return true;
}
 ?>
