<?php
require_once '/autoload.php';

$ctrl = isset($_GET['ctrl']) ? $_GET['ctrl'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'all';


$ctrl .= 'Controller';
$metod = 'action_'.$act;

//require_once __DIR__.'/controllers/'.$ctrl.'.php';

$news = new $ctrl;
$news->$metod();



