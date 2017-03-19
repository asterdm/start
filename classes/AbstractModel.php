<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of abstractModel
 *
 * @author yugin
 */
class AbstractModel {
    protected static $table;
    
    public static function getTableName() {
        
        return static::$table;
        
    }
    
    public static function findAll() {
        
        $db_data = new DBPDO();
        $db_data->setClassName(get_called_class());
        $sql = 'SELECT * FROM ' . static::getTableName();
        return $db_data->query($sql);
        
    }
    
    public static function findOnebyId($id) {
        
        $db_data = new DBPDO();
        $db_data->setClassName(get_called_class());
        $sql = 'SELECT * FROM '.static::$table.' WHERE id=:id';
        return $db_data->query($sql, [':id' => $id])[0];
        
    }
}
