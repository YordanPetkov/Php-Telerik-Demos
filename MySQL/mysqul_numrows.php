<?php 
require_once ("database_config.php");

$sql = "SELECT * FROM countries";

$res = mysqli_query($dblink, $sql);
$rowsCount = mysqli_num_rows($res);
echo "ROWS : " . $rowsCount;