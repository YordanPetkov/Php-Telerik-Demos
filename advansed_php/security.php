<?php
if(isset($_GET['element'])){
    $el = $_GET['element'];
    echo "<b>" . htmlspecialchars($el) . "</b>";
}


$dblink = mysqli_connect('localhost','exlogin','123456','hr');

$username = $_GET['username'];
$password = $_GET['password'];

$username_safe = mysqli_real_escape_string($dblink, $username);
$password_safe = mysqli_real_escape_string($dblink, $password);

$data = mysqli_query($dblink, "SELECT id FROM users WHERE username = '{$username_safe}' AND `password` = MD5('{$password_safe}')");
if(mysqli_num_rows($data) == 1){
    echo "OK!";
}
else {
    echo "Sorry!";
}