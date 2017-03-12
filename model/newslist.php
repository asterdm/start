<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'news');





require __DIR__.'/../functions/func.php';

/**
 *
 */
class News extends Article
{
    protected static $table_name = 'news';
  
//  public static function news_list()
//  {
//    # получаем список всех новостей
//    //$db= new mysqli(HOST,USER,PASS,DB);
//    //$result= $db->query('SELECT * FROM news ORDER BY date DESC');
//      $result = DB::sql_res('SELECT * FROM news ORDER BY date DESC');
//    while ($row = $result->fetch_object(News)) {
//      $table[] = $row;
//    }
//    //$db->close();
//    return $table;
//  }
  
  
  public static function news_by_date($date)
  {
    //$db= new mysqli(HOST,USER,PASS,DB);
    $result = DB::sql_res("SELECT title, text, date FROM news WHERE date=$date");
    $row = $result->fetch_object();
    //$db->close();
    return $row;
  }
  public function load()
  {
    //$db= new mysqli(HOST,USER,PASS,DB);
    $this->title = $_POST[title];
    $this->text = $_POST[text];
    $this->date = time();
    $this->url='news_id='.time();
    $result= DB::sql_res("INSERT INTO news(title, text, date, url) VALUES ('$this->title', '$this->text', '$this->date', '$this->url')");
    //$db->close();
  }
}


 ?>
