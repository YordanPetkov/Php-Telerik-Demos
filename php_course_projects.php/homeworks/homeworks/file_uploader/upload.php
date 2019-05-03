<?php
session_start();
$pageTitle = "File Uploader";
require "includes/header.php";

if(array_key_exists("username", $_SESSION)){
    $uploads_dir = "images" . DIRECTORY_SEPARATOR . $_SESSION['username'] . DIRECTORY_SEPARATOR;
}else {
    $uploads_dir = "images" . DIRECTORY_SEPARATOR . "tmp" . DIRECTORY_SEPARATOR;
}
if($_FILES){
    if(array_key_exists("userFile",$_FILES)){
        if($_FILES["userFile"]["error"] == UPLOAD_ERR_OK) {
            if(!realpath($uploads_dir)){
                mkdir($uploads_dir);
            }
            move_uploaded_file($_FILES["userFile"]["tmp_name"], $uploads_dir . $_FILES["userFile"]["name"]);
        }
    }
}


?>
<form method="POST" enctype="multipart/form-data" action="mainPage.php">
    <input type="submit" value="Списък" />
</form>

<form method="POST" enctype="multipart/form-data" action="">
    <div>
        <label for="upload-file">Избери файл</label>
        <input type="file" id="upload-file" name="userFile"/>
    </div>
    <input type="submit" value="Качи" />
</form>

<?php
require "includes/footer.php";