<?php
require __DIR__.'/model/newslist.php';
// принять массив гет
// получить массив новости
// показать выбранный массив

if (!empty($_GET)) {
  $news_id = $_GET[news_id];
}
else {
  header("Location: /index.php");
}

$news = Article::News_by_date($news_id);

// var_dump($news);
include __DIR__.'/view/header.php';
include __DIR__.'/view/news.php';
 ?>
