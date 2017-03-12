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
    private $table_name;




    public function __construct() {
        
        $config = parse_ini_file('./database.ini');
       ;
          //var_dump($config);die;
        $dsn = $config['driver'].':host='.$config['host'].';dbname='.$db_name.';charset=utf8';
        $this->dbh = new PDO($dsn, $config['username'], $config['password']);
        
    }
    
    public function query($sql, $param = []) {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($param);
        return $sth->fetchAll();
        
    }
}
