<?php


class Human extends Mammal{
    public function playLoL() {
        echo 'playing';
    }

    public function move() {
        parent::move();
        echo 'human move';
    }
}

class Monkey extends Mammal {
    public function throwbanana() {
        echo "Throw <br />";
    }
}

class Mammal {
    public function move() {
        echo 'move <br />';
    }

    public function eat () {
        echo 'eat <br />';
    }


}

$ivan = new Human() ;
$ivan -> move();