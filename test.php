<?php
require __DIR__.'/functions/func.php';
#var_dump(getdate()) ;
// date_default_timezone_set('Europe/Moscow');
// echo $time = time();
// echo date('D, d M Y H:i:s',$time);
// var_dump($_SERVER_REQUEST_TIME);
$date = 1485563098;
$query = ConnectDBNews("SELECT title, text, date FROM news WHERE date=$date");
$row = mysqli_fetch_assoc($query);
var_dump($row);
 ?>
