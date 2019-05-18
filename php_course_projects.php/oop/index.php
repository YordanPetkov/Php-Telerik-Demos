<?php

$user = new User();
$user->username = "Gosho";
$user->age = 18;
echo $user->normalizeName('ivan');


$user2 = new User();
$user2->age = 22;
$user2->username = 'Petko';

$user2->email = 'gosho@abv.bg';
class User {

    public $username;
    public $age;

    public function __construct(){
        echo 'Constructor' . PHP_EOL;
    }

    public function __set($name, $value) {
        echo $name . '||' . $value . PHP_EOL;
    }
    public function normalizeName($name) {
        $this->denormalizeName();
        return strtoupper($name);
    }

    public function denormalizeName() {
        echo 'exit' . PHP_EOL;
    }
}