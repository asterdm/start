<?php
function NewsDBquery($query)
{
  $link = mysqli_connect('localhost', 'root', '', 'news');
  mysqli_query($link, $query);
  mysqli_close($link);
}
 ?>
