<?php

$user = new User();
$user->username = "Gosho";
$user->age = 18;
//echo $user->normalizeName('ivan');


$user2 = new User();
$user2->age = 22;
$user2->username = 'Petko';

$user2->email = 'gosho@abv.bg';
$user2->hello(2,3,1);
echo $user2->email;
class User {

    public $username;
    public $age;
    private $data = [];

    

    public function __construct(){
        //echo 'Constructor' . PHP_EOL;
    }

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return $this->data[$name];
    }

    public function __call($name, $arguments) {
        echo $name;
        echo print_r($arguments,true);
    }

    public function normalizeName($name) {
        $this->denormalizeName();
        return strtoupper($name);
    }

    public function denormalizeName() {
        //echo 'exit' . PHP_EOL;
    }
}