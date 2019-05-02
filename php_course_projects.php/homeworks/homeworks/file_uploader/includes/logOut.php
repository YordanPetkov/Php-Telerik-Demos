<?php
session_start();
if(array_key_exists("loggedIn", $_SESSION)){
    $_SESSION['loggedIn'] = false;
    header("Location: ../index.php");
    exit;
}
?>