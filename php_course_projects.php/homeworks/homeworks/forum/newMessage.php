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

if($_POST) {
    if(array_key_exists('title', $_POST)
        && array_key_exists('message', $_POST)){
            postMessage($_POST['title'], $_POST['message'], $_SESSION['username']);
        }
}

?>
<form action='logout.php'>
    <input type="submit" value="Изход">
</form>

<form method="POST" action='newMessage.php'>
    <div>
        <label for="title">Заглавие</label>
        <input type="text" maxlength="50" name="title" id="title" require>
    </div>
    <div>
        <label for="msg">Съобщение</label>
        <textarea maxlength="250" name="message" id="msg" require></textarea>
    </div>
    <input type="submit" value="Изпрати">
</form>
<?php

