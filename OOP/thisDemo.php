<?php

class TestClass {
    private $name = '';

    public function __construct($val) {
        $this->setValue($val);
    }

    public function getValue() {
        return $this->name;
    }

    public function setValue($val) {
        $this->name = $val;
    }

    public function printValue() {
        echo $this->getValue() . "<br />";
    }
}


$myObject1 = new TestClass("Gosho");
$myObject2 = new TestClass("Tosho");
$myObject1->printValue();
$myObject2->printValue();