<?php
require __DIR__.'/../functions/func.php';


function NewsgetList()
{
  $query = ConnectDBNews('SELECT * FROM news');
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
 ?>
