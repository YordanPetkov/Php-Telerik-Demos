<?php
session_set_cookie_params("3600",'/','localhost',false,true);
session_start();
$pageTitle = "File Uploader";
require "includes/header.php";

if(array_key_exists("loggedIn", $_SESSION)){
    if($_SESSION['loggedIn'] == false) {
        header("Location: index.php");
        exit;
    }else {
        if(array_key_exists("username", $_SESSION)){
            echo "Hello " . $_SESSION['username'];
        }
    }
}


?>

<form method="POST" action="includes/logOut.php">
    <input type="submit" value="Изход" />
</form>

<?php
require "includes/footer.php";