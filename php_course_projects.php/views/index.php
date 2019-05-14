<?php
include './inc/functions.php';
$connection = mysqli_connect('localhost', 'exlogin', '123456', 'books');
mysqli_set_charset($connection, 'utf8');
$q = mysqli_query($connection, 'SELECT * FROM books');
$data = [];
while ($row = mysqli_fetch_assoc($q)) {
    $data[] = $row;
}
render($data, './templates/index_public.php');

