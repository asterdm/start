<?php
require_once __DIR__.'/../model/newslist.php';
/**
 *
 */
class AdminController
{


  public function action_delete_news()
  {  

   
    if (isset($_POST['delete'])){
        
        $news = NewsModel::findOnebyId($_POST['delete']);
        $view = new View;
        $view->news = $news;
        echo 'была удалена новость';
        $view->display('header.php');
        $view->display('news.php');
        $view->display('footer.php');
        $news->delete();
        exit();

      }
    $news = NewsModel::findOnebyId($_GET['news_id']);
    $view = new View;
    $view->news = $news;
    $view->display('header.php');
    $view->display('news.php');
    $view->display('footer.php');

  }

  public function action_add_news()
  {
      if (!empty($_POST)){
    $load_news =  new NewsModel;
    $load_news->title = $_POST['title'];
    $load_news->text = $_POST['text'];
    $load_news->date = time();
    $load_news->url = 'news_id='.time();
    $load_news->insert();
    $news = NewsModel::findOnebyId($load_news->getID());
    
      }
    
    $view = new View;
    $view->display('header.php');
     if (isset($news)) {
         $view->news = $news;
         $view->display('addnews.php');
     }
    $view->display('addnewsform.php');
    $view->display('footer.php');
 }

}


 ?>
