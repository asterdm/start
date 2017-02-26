<?php
require_once __DIR__.'/../model/newslist.php';
/**
 *
 */
class NewsController
{

  public function action_all()
  {
    $newslist = News::getlist();
    include __DIR__.'/../view/header.php';
    include __DIR__.'/../view/newslist.php';
  }

  public function action_one_news()
  {
    $news_id = $_GET[news_id];
    $news = News::news_by_date($news_id);
    include __DIR__.'/../view/news.php';
  }

  public function action_add_news()
  {
    empty($_POST) ?: news_load();
    include __DIR__.'/../view/header.php';
    include __DIR__.'/../view/addnewsform.php';
  }

}


 ?>
