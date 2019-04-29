<?php

interface Shape {
    public function Area ($a, $b);
}

class Circle implements Shape {
    public function Area($a, $b = 0) {
        return M_PI*$a*$a;
    }
}

class Rectangle implements Shape {
    public function Area($a, $b) {
        return $a*$b;
    }
}

class Triangle implements Shape {
    public function Area($a, $b) {
        return $a*$b/2;
    }
}

$myCircle = new Circle();
$myRect = new Rectangle();
$myTriangle = new Triangle();

echo $myCircle->Area(3) . "<br />";
echo $myRect->Area(2,4) . "<br />";
echo $myTriangle->Area(3,2) . "<br />";