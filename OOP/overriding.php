<?php
class AB {
    public function __construct() {
        echo "Object form class A is maded.";
    }
    public function foo() {
        echo "called from A";
    }
}

class B extends AB {
    public function __construct() {
        echo "Object form class B is maded.";
        parent::__construct();
    }
    public function foo() {
        echo "called from B";
    }
}

$obj1 = new AB();
$obj2 = new B();
$obj2->foo();
