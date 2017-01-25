<?php
#var_dump(getdate()) ;
date_default_timezone_set('Europe/Moscow');
echo $time = time();
echo date('D, d M Y H:i:s',$time);
var_dump($_SERVER_REQUEST_TIME);
 ?>
