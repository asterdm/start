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
      //protected static $db;
      protected static $res;


       public static function sql_res($query)
       {
         // метод возвращает результат в виде объектов из запроса
           $db= new mysqli(HOST,USER,PASS,DB);
           self::$res = $db->query($query);
           $db->close();
           return self::$res;


       }
     }

 ?>
