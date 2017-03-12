<?php


abstract class Article 
{
    public $header;
    public $title;
    public $discription;
    public $text;
    public $date;
    public $url;
    protected static $table_name;

    public static function getList() {
        //Получаем список всех полей из таблицы для статьи
        $query = 'SELECT * FROM ' . static::$table_name;
        $result = DB::sql_res($query);
        while ($row = $result->fetch_object()) {
                 $table[] = $row;
                }
    
    return $table;        
        
    }

}




