<?php
session_start();
$pageTitle = "Сесии";
$correctUsername = "user";
$correctPassword = "123456";
require "header.php";

if(array_key_exists("loggedIn",$_SESSION)){
    if($_SESSION['loggedIn'] == true) {
        header("Location : mainPage.php");
        exit;
    }
}

if($_POST) {
    if(array_key_exists("username",$_POST) && array_key_exists("pass",$_POST)){
        if($_POST["username"] == $correctUsername && $_POST["pass"] == $correctPassword){
            $_SESSION['loggedIn'] = true; 
        }
    }
}
?>
<form method="POST">
    <div>
        <label for="username">Име</label>
        <input type = "text" id="username" name = "username" />
    </div>    
    <div>
        <label for="password">Парола</label>
        <input type="password" id="password" name="pass" />
    </div>    
    <input type="submit" value="Вход" />
    
</form>


<?php

require "footer.php";