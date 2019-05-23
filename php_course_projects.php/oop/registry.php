<?php

class Registry {

    private static $data = [];
    
    public static function setData($key, $val) {
        self::$data[$key] = $val;
    }
    
    public static function getData($key) {
        return self::$data[$key];
    }
    
}

Registry::setData('username', 'ivan');
echo Registry::getData('username');