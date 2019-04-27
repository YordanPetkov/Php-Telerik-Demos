<?php

function fibonachi(){
    $a = 1;
    $b = 1;
    for($i = 1; $i <= 10; $i++){
        echo $a . " ";
        $c = $b;
        $b = $a + $b;
        $a = $c;
    }
}

?>