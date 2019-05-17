<?php

$user = new User();
$user->username = "Gosho";
$user->age = 18;

$user2 = new User();
$user2->age = 22;
$user2->username = 'Petko';

class User {

    public $username;
    public $age;

}