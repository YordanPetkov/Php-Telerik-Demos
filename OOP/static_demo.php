<?php
class BasicClass {
    public static $myVariable;
    public static function myPrint() {
        echo self::$myVariable;
    }
}

BasicClass::$myVariable = "TITOTITO";
BasicClass::myPrint();