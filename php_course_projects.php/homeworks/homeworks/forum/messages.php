<?php
session_start();
require_once 'functions.php';

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo $username;
}else {
    header('Location: index.php');
    exit();
}

?>
<form action='logout.php'>
    <input type="submit" value="Изход">
</form>

<form action='newMessage.php'>
    <input type="submit" value="Ново съобщение">
</form>
<?php

printMessages();