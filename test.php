<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'news');

/**
 *
 */
class DB
   {
     protected static $db;
     protected static $res;


      public static function sql($query)
      {
          self::$db= new mysqli(HOST,USER,PASS,DB);
          self::$res = self::$db->query($query);
          self::$db->close();
          return self::$res;


      }
    }


$query = "SELECT * FROM news WHERE id=15";

$sql = DB::sql($query);

$result = $sql->fetch_assoc();

var_dump($result);



 ?>
