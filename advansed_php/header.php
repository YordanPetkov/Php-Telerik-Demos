<?php
//header ("HTTP/1.1 404 Not Found");
//header ("Location : https:/abv.bg");
//$file = MP4DIR.$_GET['down'].".mp3";
$file = "downloadFile.txt";
if(!file_exists($file))
    header("HTTP/1.0 404 Not Found", true, 404);
else {
    header("Content-Type: text/plain");
    header("Content-Lenght: ").filesize($file);
    header("Content-Disposition: attachment;" 
    ."filename={$file}");
    echo file_get_contents($file);
}