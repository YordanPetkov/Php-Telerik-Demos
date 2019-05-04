<?php
$con = mysqli_connect('localhost', 'exlogin', '123456', 'demo_chat');
if(!$con) {
    echo 'no database';
}

mysqli_set_charset($con, 'utf8');

$sql = 'SELECT * FROM users';

$q = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($q)) {
    echo '<pre>' .print_r($row, true). '</pre>';
    echo "<br />";
}