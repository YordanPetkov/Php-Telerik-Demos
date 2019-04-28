<?php

class A {
    private $bar;
    public function __construct($bar) {
        $this->bar = $bar;
    }
    public function myPrint () {
        echo $this->bar;
    }
}

$myObject = new A("test");
$myObject->myPrint();