<?php

class Animal {
    protected $name = '';
    protected $type = '';

    public function MakePooPoo () {
        echo 'The ' . $this->type. ' ' . $this->name.' made a poo poo.';
    }

}

class Doggy extends Animal {
    protected $type = 'dog';
    public function __construct($name) {
        $this-> name = $name;
        
    }
}

$MyDog = new Doggy("Sharo");
$MyDog->MakePooPoo();