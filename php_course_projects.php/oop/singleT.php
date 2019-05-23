<?php

class Registry {

    private static $instance = null;
    private $data;

    private function __construct() {
    }
    
    public function setValue($key, $val) {
        $this->data[$key] = $val;
    }
    
    public function getValue($key) {
        return $this->data[$key];
    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

$connection = Registry::getInstance();

$connection->setValue('username', 'gosho');
echo $connection->getValue('username');