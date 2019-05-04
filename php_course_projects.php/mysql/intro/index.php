<?php
$pageTitle = "MySQL demo";
include 'header.php';
require_once 'functions.php';
?>
<form method="POST" action="">
    <textarea name="txt"></textarea>
    <input type="submit" value="Добави" />
</form>

<?php
$connection = createConnectionWithDB();
printData($connection);



include 'footer.php';