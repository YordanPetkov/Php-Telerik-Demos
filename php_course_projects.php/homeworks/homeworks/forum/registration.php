<?php
session_start();
require_once 'functions.php';
if($_POST) {
    if(array_key_exists('username', $_POST) 
        && array_key_exists('password', $_POST)
        && array_key_exists('confpassword', $_POST)){
            if($_POST['password'] != $_POST['confpassword']){
                echo "Паролите не съвпадат.";
            }else {
                if(usernameExists($_POST['username'])){
                    echo "Има потребител с такова име.";
                }else {
                    if(!makeRegistration($_POST['username'], $_POST['password'])){
                        echo 'Грешка.';
                    }else {
                        header('Location: index.php');
                        exit;
                    }
                }
            }
    }else {
        echo "Въведи данните";
    }
}

?>

<form method='POST' action=''>
    <div>
        <label for="user-name">Име</label>
        <input type="text" minlength=5 name="username" id="user-name" require>
    </div>
    <div>
        <label for="pass">Парола</label>
        <input type="password" minlength=5 name="password" id="pass" require>
    </div>
    <div>
        <label for="confpass">Повтори паролата</label>
        <input type="password" minlength=5 name="confpassword" id="confpass" require>
    </div>
    <input type="submit" value="Регистрация">
</form>

<form action='index.php'>
    <input type="submit" value="Вход">
</form>



