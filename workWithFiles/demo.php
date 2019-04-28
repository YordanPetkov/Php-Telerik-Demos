<?php
$path = "files" . DIRECTORY_SEPARATOR. "test1.txt";
$file = fopen($path, "r");
var_dump($file);
while(!feof($file))
    $file_contents = stream_get_contents($file);
    echo fread ($file, 32) . "<br />";
    echo $file_contents;

fclose($file);

$file = fopen($path, "w");
echo fwrite($file, "ddaas!");

fclose($file);