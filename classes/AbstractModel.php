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
        //метод вставляет в таблицу все не приватные свойства дочерних классов 
        
        $value_data = get_object_vars($this);//свойства объекта и их значения
        $keys_data =  array_keys($value_data);//массив свойств
        

        $vars = implode(", ",$keys_data);
        $vars_pod = implode(", ",array_map("podstan", $keys_data));
        
        $param = array_combine(array_map("podstan", $keys_data), $value_data);
       
        $db_data = new DBPDO();
        $db_data->setClassName(get_called_class());
        $sql = 'INSERT INTO '.static::$table." ($vars) VALUES ($vars_pod)";
        $res = $db_data->execute($sql, $param);
        
        //очень тонкий момоент, чтобы достучаться до приватного свойства пришлось в дочернем классе прописать методы получения и записи ID
        $this->setID($db_data->getDBH()->lastInsertId());
    }
    
    public function delete() {
        
        $db_data = new DBPDO();
        $sql = 'DELETE FROM '.static::$table.' WHERE id=:id';
        $db_data->execute($sql, [':id' => $this->getID()]);
    }
    
    public function update() {
        
        $value_data = get_object_vars($this);//названия свойств объекта и их значения
        $keys_data =  array_keys($value_data);//массив названия свойств
        

        $vars = implode(", ",$keys_data);
        $vars_pod = implode(", ",array_map("podstanSET", $keys_data));
        
        $param = array_combine(array_map("podstan", $keys_data), $value_data);
        
        
        $db_data = new DBPDO();
        $sql = 'UPDATE '.static::$table.' SET'."($vars_pod)".' WHERE id=:id';
        $param[':id'] = $this->getID();
        
        $db_data->execute($sql, $param);
        
    }
    
    static public function findByColumn($column, $value){
        
        
    }

}
