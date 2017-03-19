<?php
require_once __DIR__.'/../model/newslist.php';
/**
 *
 */
class NewsController
{

  public function action_all()
  {
    $newslist = NewsModel::findAll();
    $view = new View;
    $view->newslist = $newslist;
    $view->display('header.php');
    $view->display('newslist.php');
  }

  public function action_one_news()
  {
      
       
    $news = NewsModel::findOnebyId($_GET['news_id']);  
    $view = new View;
    $view->news = $news;
    $view->display('header.php');
    $view->display('news.php');

  }

  public function action_add_news()
  {
    $load_news =  new News;
    empty($_POST) ?: $load_news->load();
    $view = new View;
    $view->display('header.php');
    $view->display('addnewsform.php');
 }

}


 ?>
