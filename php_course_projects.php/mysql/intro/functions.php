<?php

function printData($connection) {
    $result = mysqli_query($connection, 'SELECT * FROM users');
    if(!$result) {
        echo 'Error in database' . PHP_EOL;
        echo mysqli_error($connection);
    }

    while($row = $result->fetch_assoc()) {
        echo "<pre>";
        echo print_r($row);
        echo "</pre>";
        echo "<br />";
    }
}

function createConnectionWithDB(){
    $connection = mysqli_connect('localhost', 'exlogin', '123456', 'demo_chat');

    if(!$connection) {
        echo 'No database';
        exit;
    }
    //mysqli_query($connection, "SET NAMES utf8");
    mysqli_set_charset($connection, 'utf8');

    return $connection;
}