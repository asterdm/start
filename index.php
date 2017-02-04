<?php
require_once __DIR__.'/model/newslist.php';


$newslist = Article::news_list();
// var_dump($newslist);
include __DIR__.'/view/header.php';
include __DIR__.'/view/newslist.php';
