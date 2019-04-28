<?php
$path = "files" . DIRECTORY_SEPARATOR. "test1.txt";
$file = fopen($path, "r");
var_dump($file);
while(!feof($file))
    echo fread ($file, 32);



$file = fopen($path, "w");
fwrite($file, "das!");