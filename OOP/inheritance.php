<?php

class Animal {
    protected $name = '';
    protected $type = '';

    public function MakePooPoo () {
        echo 'The ' . $this->type. ' ' . $this->name.' made a poo poo.';
    }

}

class Dog extends Animal {
    protected $type = 'dog';
    public function __construct($name) {
        $this-> name = $name;
        
    }
}

$MyDog = new Dog("Sharo");
$MyDog->MakePooPoo();