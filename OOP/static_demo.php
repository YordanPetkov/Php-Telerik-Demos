<?php
class BasicClass {
    public static $myVariable;
    const PI = 3.14;
    public static function myPrint() {
        echo self::$myVariable;
    }
}

BasicClass::$myVariable = "TITOTITO";
BasicClass::myPrint();
echo BasicClass::PI;