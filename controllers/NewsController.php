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
    $view = new View;
    $view->newslist = $newslist;
    $view->display('header.php');
    $view->display('newslist.php');
    //include __DIR__.'/../view/header.php';
    //include __DIR__.'/../view/newslist.php';
  }

  public function action_one_news()
  {
    $news_id = $_GET[news_id];
    $news = News::news_by_date($news_id);
    $view = new View;
    $view->news = $news;
    $view->display('header.php');
    $view->display('news.php');

    //include __DIR__.'/../view/news.php';
  }

  public function action_add_news()
  {
      $load_news =  new News;
    empty($_POST) ?: $load_news->load();
    $view = new View;
    $view->display('header.php');
    $view->display('addnewsform.php');

    //include __DIR__.'/../view/header.php';
    //+include __DIR__.'/../view/addnewsform.php';
  }

}


 ?>
