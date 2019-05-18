<?php

class DB {

    private static $instance = null;
    private $table_name;

    private function __construct() {
    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }
}

$connection = DB::getInstance();

$connection2 = DB::getInstance();