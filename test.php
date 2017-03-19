<?php

$table = [df=>[jn=>'sdgdfg', jo=>'jisdh', sdf=>'lkishfvxfg'], sdfssd=>'sss55sdf5sdf'];

$config = parse_ini_file('./database.ini');
$db_name = 'news';
          //var_dump($config);die;
$dsn = $config['driver'].':host='.$config['host'].';dbname='.$db_name.';charset=utf8';
$dbh = new PDO($dsn, $config['username'], $config['password']);
//$dbh->getAttribute();
$attributes = array(
    "AUTOCOMMIT", "ERRMODE", "CASE", "CLIENT_VERSION", "CONNECTION_STATUS",
    "ORACLE_NULLS", "PERSISTENT", "PREFETCH", "SERVER_INFO", "SERVER_VERSION",
    "TIMEOUT"
);

foreach ($attributes as $val) {
    echo "PDO::ATTR_$val: ";
    echo $dbh->getAttribute(constant("PDO::ATTR_$val")) . "\n";
}

//var_dump($dbh);
die;

class myIterator implements Iterator{
    public $a = 1;
    public $b = 2;
    public $c = 3;
    private $data = [];  

    public function __construct($table) {
        $this->data = $table;
    }

    public function rewind() {
        ////data_dump(__METHOD__);
        reset($this->data);
    }

    public function current() {
        $data = current($this->data);
        return $data;
    }

    public function key() {
        $data = key($this->data);
        return $data;
    }

    public function next() {
        $data = next($this->data);
        return $data;
    }

    public function valid() {
        $key = key($this->data);
        $data = ($key !== NULL && $key !== FALSE);
        return $data;
    }
}

$it = new myIterator($table);

foreach($it as $key => $value) {
    var_dump($key, $value);
    echo "\n";
}
    


