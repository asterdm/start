<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NewsModel
 *
 * @author yugin
 */
class NewsModel extends AbstractModel{
    
    private $id;//приватное чтобы в метод вставки это свойство не попадало
    public $title;
    public $text;
    public $date;
    public $url;
    protected static $table = 'news';
    
    public function getID() {
        
        return $this->id;
    }
    
    public function setID($id) {
        
        $this->id = $id;
        
    }
    
    public function sort_by_date(){
        
       return asort($this['date']);
        
    }
    
    public static function findAll($sortby = 'id', $desc = '') {
        
        $db_data = new DBPDO();
        $db_data->setClassName(get_called_class());
        $sql = 'SELECT * FROM ' . static::getTableName().' ORDER BY '.$sortby.' '.$desc ;
        return $db_data->query($sql);
        
    }
    
}
