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
    
    public function insert() {
        
        $value_data = get_object_vars($this);//свойства объекта
        $keys_data =  array_keys($value_data);//ключи свойств
        

        $vars = implode(", ",$keys_data);
        $vars_pod = implode(", ",array_map("podstan", $keys_data));
        
        $param = array_combine(array_map("podstan", $keys_data), $value_data);
       
        $db_data = new DBPDO();
        $db_data->setClassName(get_called_class());
        $sql = 'INSERT INTO '.static::$table." ($vars) VALUES ($vars_pod)";
        $db_data->execute($sql, $param);
        
    }
    public function delete($id) {
        
        $db_data = new DBPDO();
        $sql = 'DELETE FROM '.static::$table.' WHERE id=:id';
        $db_data->execute($sql, [':id' => $id]);
    }
}
