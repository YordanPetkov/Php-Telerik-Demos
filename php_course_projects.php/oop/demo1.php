<?php

class User {

    private $username;

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($name) {
        $this->username = $name;
    }
}

$ivan = new User();
$petko = new User();

$ivan->setUsername('Ivan');
$petko->setUsername('Petko');

echo $ivan->getUsername() . PHP_EOL;
echo $petko->getUsername();