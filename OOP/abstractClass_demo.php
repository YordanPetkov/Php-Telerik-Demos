<?php

abstract class BaseClass {
    abstract protected function getValue();

    abstract public function getValue2($prefix);

    public function printOut() {
        echo $this->getValue();
    }
}

class childClass1 extends BaseClass {
    /**
     * @Override of abstract method getValue()
     * 
     */
    protected function getValue() {
        return "Class1 <br />";
    }
    public  function getValue2($prefix){
        return $prefix."NAC2<br />";
    }
}

class childClass2 extends BaseClass {
    /**
     * @Override of abstract method getValue()
     */
    protected function getValue() {
        return "Class2 <br />";
    }
    public  function getValue2($prefix){
        return $prefix."NAC2<br />";
    }
}

$myObj1 = new childClass1();
$myObj2 = new childClass2();

$myObj1->printOut();
$myObj2->printOut();