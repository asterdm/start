<?php
#var_dump(getdate()) ;
// date_default_timezone_set('Europe/Moscow');
// echo $time = time();
// echo date('D, d M Y H:i:s',$time);
// var_dump($_SERVER_REQUEST_TIME);
  $link = mysqli_connect('localhost', 'root', '', 'news');
  $sql='INSERT INTO news(title, text, date, url) VALUES (asdf,sdaf,45488,/sdf/sdf/.sd)';
  var_dump($link)
 ?>
