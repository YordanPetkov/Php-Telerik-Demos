<?php
$db = mysqli_connect('localhost', 'exlogin', '123456', 'books');
if(!$db) {
    echo "No database";
}

mysqli_set_charset($db, 'utf8');