<?php
class Animal {
    protected $name = '';
    protected $type = '';

    public function __construct($name) {
        $this->name = $name;
    }

    public function MakePooPoo () {
        echo "$this->name make a big poo poo on the carpet. <br />";
    }

    public function printData () {
        echo "$this->name is probably $this->type <br />";
    }
}

class Dog extends Animal {
    private $age;
    public function __construct($name, $age)
    {
        $this->type = "dog";
        $this->age = $age;
        parent::__construct($name);
    }

    public function MakePooPoo() {
        echo "$this->name is good dog and do not make a poo poo. <br />";
    }

    public function printData() {
        echo "$this->name is $this->age years old. <br />";
    }
}

class Cat extends Animal {
    private $color;
    public function __construct($name, $color)
    {
        $this->type = "cat";
        $this->color = $color;
        parent::__construct($name);
    }

    public function MakePooPoo(){
        echo "$this->name make small poo poo on bed. <br />.";
    }

    public function printData() {
        echo "$this->name is $this->color. <br />";
        parent::printData();
    }
}


$myAnimal = new Animal("Pesho");
$myDog = new Dog("Charlie", 10);
$myCat = new Cat("Jessa", "grey");

$myAnimal->MakePooPoo();
$myDog->MakePooPoo();
$myCat->MakePooPoo();

$myAnimal->printData();
$myDog->printData();
$myCat->printData();
