<?php
session_start();
require_once 'functions.php';

if($_POST) {
    if(array_key_exists('username',$_POST)
        && array_key_exists('password', $_POST)) {
            if(checkUser($_POST['username'], $_POST['password'])) {
                $_SESSION['username'] = htmlspecialchars($_POST['username']);
                header('Location: messages.php');
                exit;
            }else {
                echo "Грешни данни!";
            }
        }
}

?>

<form method='POST' action=''>
    <div>
        <label for="user-name">Име</label>
        <input type="text" name="username" id="user-name">
    </div>
    <div>
        <label for="pass">Парола</label>
        <input type="password" name="password" id="pass">
    </div>
    <input type="submit" value="Вход">
</form>

<form action='registration.php'>
    <label for="registration">Нямаш акаунт ? Направи си сега.</label>
    <input type="submit" value="Регистрация">
</form>
