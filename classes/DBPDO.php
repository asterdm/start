<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBPDO
 *
 * @author yugin
 */
class DBPDO {
    
    private $dbh;
    private $class_name;

    public function __construct() {
        
        $config = parse_ini_file('./database.ini');
        $dsn = $config['driver'].':host='.$config['host'].';dbname='.$config['db_name'].';charset=utf8';
        $this->dbh = new PDO($dsn, $config['username'], $config['password']);

    }
    
    function setClassName($class) {
        
        $this->class_name = $class;
        
    }
    
    public function query($sql, $param = []) {
        
        $sth = $this->dbh->prepare($sql);
        $sth->execute($param);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->class_name);
  
    }
    public function execute($sql, $param) {
        
        $sth = $this->dbh->prepare($sql);
        $sth->execute($param);
        
    }
}
