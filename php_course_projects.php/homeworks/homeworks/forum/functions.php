<?php
$connection = mysqli_connect('localhost', 'exlogin', '123456', 'demo_chat');
function usernameExists($username) {
    $username = htmlspecialchars($username);
    global $connection;
    $sql = 'SELECT user_name FROM users WHERE user_name = "'.$username.'"';
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) > 0) {
        return true;
    }
    return false;
}

function makeRegistration($username, $password) {
    $username = htmlspecialchars($username);
    $password = MD5(htmlspecialchars($password));
    global $connection;
    $sql = 'INSERT INTO users (user_name,user_password) VALUES ("'.$username.'", "'.$password.'")';
    if(mysqli_query($connection,$sql)) {
        return true;
    }
    return false;
}