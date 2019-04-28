<?php
class Foo {

    private $properties = [];

    public function __set($name, $value) {
        $this->properties[$name] = $value;
    }

    public function __get($name) {
        if(isset($this->properties[$name])){
            return $this->properties[$name];
        }

        return false;
    }

    public function __call($name /*string*/, $arguments /**array */) {
        /*$dump = var_export($arguments, true);
        file_put_contents("dump.txt", $dump);*/
    }
}

$f = new Foo();
$f->gosho = "513s";

isset($f->pesho);// __isset
unset($f->pesho);// __unset
echo "<br />";
echo $f->gosho;

$f->superCoolMethod(1,2,3);
$f->myMethod("1,2,3",3,5);