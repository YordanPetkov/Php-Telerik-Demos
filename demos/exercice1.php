<?php

$arr = [1,4,2,3,6,12,-5,12,53,6];

function square($a){
    return $a*$a;
}

function map_array($arr, $function){
    foreach($arr as &$value){
        $value = $function($value);
    }
    return $arr;
}


function min_element($arr){
    $min = $arr[0];
    foreach ($arr as $value) {
        if($value < $min) {
            $min = $value;
        }
    } 
    return $min;
}

echo "Minimal value in array is : " . min_element($arr);
echo "<br />";

var_dump( map_array($arr, "square"));
