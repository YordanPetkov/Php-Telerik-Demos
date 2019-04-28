<?php
class HelloWorld {
    public function __construct($name) {
        echo "I am the constructor made by $name!";
        echo "<br />";
    }
    public $message = "Hello OOP world.";
    public function MyPrint() {
        echo "Hello object oriented world!";
    }
}

$myObject = new HelloWorld("Gosho");
$myObject->MyPrint();
echo "<br />";
echo $myObject->message;
