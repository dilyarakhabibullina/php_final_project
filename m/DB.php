<?php

class DB {
include 'config/config.php';
protected static $instance = null;
private static function instance() {
    if (self::$instance === null) {
        $opt = [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION, 
        \PDO::ATTR_DEFAULT_FETCH_NODE => \PDO::FETCH_ASSOC,
        \PDO::ATTR_EMULATE_PREPARES => TRUE, ];
    }
}
   
}        
?>