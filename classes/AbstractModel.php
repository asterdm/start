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
}
