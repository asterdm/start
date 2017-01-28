<?php
function NewsDBquery($query)
{
  $link = mysqli_connect('localhost', 'root', '', 'news');
  mysqli_query($link, $query);
  mysqli_close($link);
}

function ConnectDBNews($query)
{
  $link = mysqli_connect('localhost', 'root', '', 'news');
  return mysqli_query($link, $query);
}

function DisconnectDBNews()
{
  $link = mysqli_connect('localhost', 'root', '', 'news');
  mysqli_close($link);
}
 ?>
