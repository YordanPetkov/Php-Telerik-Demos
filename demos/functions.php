<?php

function output ($str) {
    echo $str . "<br />";
}


function my_print() {
    global $a;
    output($a);
}