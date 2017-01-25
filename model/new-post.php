<?php
date_default_timezone_set('Europe/Moscow');
isset($_POST);
$loadtable=$_POST;
$loadtable[date]=time();
$loadtable[url]='?news_id='.time();
var_dump($loadtable);

 ?>
