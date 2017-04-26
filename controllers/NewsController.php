<?php
require_once __DIR__.'/../model/newslist.php';
/**
 *
 */
class NewsController
{

  public function action_all()
  {
    $newslist = NewsModel::findAll('title');     
    $view = new View;
    $view->newslist = $newslist;
    $view->display('header.php');
    $view->display('newslist.php');
    $view->display('footer.php');
  }

  public function action_one_news()
  {  

  
    $news = NewsModel::findOnebyId($_GET['news_id']);
    $view = new View;
    $view->news = $news;
    $view->display('header.php');
    $view->display('news.php');
    $view->display('footer.php');

  }

  
}


 ?>
