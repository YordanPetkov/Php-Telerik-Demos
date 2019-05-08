<?php
mb_internal_encoding('UTF-8');
$db = mysqli_connect('localhost', 'exlogin', '123456', 'books');
if(!$db) {
    echo "No database";
}

mysqli_set_charset($db, 'utf8');


function getAuthors($db) {
    $sql = 'SELECT * FROM authors';
    $q = mysqli_query($db, $sql);
    if(mysqli_error($db)) {
        return false;
    }
    $ret = [];
    while($row = mysqli_fetch_assoc($q)) {
        $ret[] = $row;
    }
    return $ret;
}
