<?php

function __autoload($class_name) {
    $name = "includes/".$class_name.".inc.php";
    if(file_exists($name)){
        include $name;
    }
    else {
        echo "Class not found";
    }
}

/*function My_autoload($class_name) {
    $name = "includes/".$class_name.".inc.php";
    if(file_exists($name)){
        include $name;
    }
    else {
        echo "Class not found";
    }
}
spl_autoload_register("My_autoload");*/

$obj = new db();
$obj->print();