<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'news');

/**
 *
 */
class News
{


}



$db= new mysqli(HOST,USER,PASS,DB);
$result= $db->query('SELECT * FROM news ORDER BY date DESC');
while ($row = $result->fetch_object(News)) {
  $table[] = $row;
}

var_dump($table);
 ?>
