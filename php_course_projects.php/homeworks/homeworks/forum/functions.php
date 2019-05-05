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

function checkUser($username, $password) {
    $username = htmlspecialchars($username);
    $password = MD5(htmlspecialchars($password));
    global $connection;
    $sql = 'SELECT user_name FROM users WHERE user_name = "'.$username.'" AND user_password = "'.$password.'"';
    $result = mysqli_query($connection,$sql);
    if(mysqli_num_rows($result) > 0) {
        return true;
    }
    return false;
}

function printMessages() {
    global $connection;
    $sql = 'SELECT * FROM messages ORDER BY msg_date DESC, msg_id DESC';
    $result = mysqli_query($connection, $sql);
    if(mysqli_num_rows($result) > 0) {
        echo '<table style="border:1px solid black">';
        echo '<tr>';
        echo '<th>Номер</th>';
        echo '<th>Дата</th>';
        echo '<th>Заглавие</th>';
        echo '<th>Съобщение</th>';
        echo '<th>Автор</th>';
        echo '</tr>';
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['msg_id'] . '</td>';
            echo '<td>' . $row['msg_date'] . '</td>';
            echo '<td>' . $row['msg_title'] . '</td>';
            echo '<td>' . $row['msg_data'] . '</td>';
            echo '<td>' . $row['author'] . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    
}