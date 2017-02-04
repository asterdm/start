<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'news');





require __DIR__.'/../functions/func.php';

/**
 *
 */
class Article
{
  public $title;
  public $text;
  public $date;
  public $url;
  function add_news()
  {
    # берем строку и кладем в базу данных
  }
  public static function news_list()
  {
    # получаем список всех новостей
    $db= new mysqli(HOST,USER,PASS,DB);
    $result= $db->query('SELECT * FROM news ORDER BY date DESC');
    while ($row = $result->fetch_object(Article)) {
      $table[] = $row;
    }
    $db->close();
    return $table;
  }
  public static function News_by_date($date)
  {
    $db= new mysqli(HOST,USER,PASS,DB);
    $result= $db->query("SELECT title, text, date FROM news WHERE date=$date");
    $row = $result->fetch_object(Article);
    $db->close();
    return $row;
  }
}


function CreateLoadTable()
{
  date_default_timezone_set('Europe/Moscow');
  $loadtable=$_POST;
  $loadtable[date]=time();
  $loadtable[url]='?news_id='.time();
  return $loadtable;
}

function LoadTableBD($t)
{
  $query="INSERT INTO news(title, text, date, url) VALUES ('$t[title]', '$t[content]', '$t[date]', '$t[url]')";
  NewsDBquery($query);
  return true;
}
 ?>
